<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to top, , color2);
            
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        .upload-btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .fa-upload {
            font-size: 20px;
            margin-left: 10px;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        img {
            display: block;
            margin-top: 10px;
            margin-bottom: 20px;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <?php include'header.php' ?>
    <div class="container">
        <h1>Upload images</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="photos[]" multiple>
            <input type="submit" value="Upload">
        </form>

        <?php
        // Database connection configuration
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hack";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photos"])) {
            $photos = $_FILES["photos"];
            foreach ($photos["tmp_name"] as $key => $tmp_name) {
                $photo_name = $photos["name"][$key];
                $photo_path = "uploads/" . $photo_name;
                if (move_uploaded_file($tmp_name, $photo_path)) {
                    $result = check_image($photo_path);
                    if ($result == "SFW") {
                        echo "<h2>Result for $photo_name: SAFE</h2>";
                        echo '<img src="uploads/' . $photo_name . '" width="300"><br>';

                        // Insert image details into database
                        $sql = "INSERT INTO uploaded_images (filename, filepath) VALUES ('$photo_name', '$photo_path')";
                        if ($conn->query($sql) === TRUE) {
                            echo "Record inserted successfully";
                        } else {
                            echo "Error inserting record: " . $conn->error;
                        }
                    } else {
                        echo "<h2>Image $photo_name is NOT SAFE</h2>";
                    }
                } else {
                    echo "<h2>Failed to upload image: $photo_name</h2>";
                }
            }
        }


        function check_image($img_path)
        {
            $img = imagecreatefromjpeg($img_path);
            $width = imagesx($img);
            $height = imagesy($img);
            $total_pixels = $width * $height;
            $min_skin_pixels = $total_pixels * 0.45; // Minimum percentage of skin pixels required for an image to be considered nude
            $skin_pixels = 0;

            for ($x = 0; $x < $width; $x++) {
                for ($y = 0; $y < $height; $y++) {
                    $rgb = imagecolorat($img, $x, $y);
                    $r = ($rgb >> 16) & 0xFF;
                    $g = ($rgb >> 8) & 0xFF;
                    $b = $rgb & 0xFF;

                    // Check if the pixel is skin color (example values, adjust as needed)
                    if ($r > 95 && $g > 40 && $b > 20 && max($r, $g, $b) - min($r, $g, $b) > 15 && abs($r - $g) > 15 && $r > $g && $r > $b) {
                        $skin_pixels++;
                    }

                    // If the percentage of skin pixels exceeds the threshold, consider the image nude
                    if ($skin_pixels >= $min_skin_pixels) {
                        return "NSFW";
                    }
                }
            }

            return "SFW";
        }


        $conn->close();
        ?>
    </div>
</body>

</html>