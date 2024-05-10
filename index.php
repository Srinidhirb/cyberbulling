<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $familyName = $_POST["family_name"];

    $sql = "INSERT INTO families (name) VALUES ('$familyName')";
    if ($conn->query($sql) === TRUE) {
        echo "New family created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $familyId = $conn->insert_id;
    for ($i = 1; $i <= 5; $i++) {
        $name = $_POST["member{$i}_name"];
        $email = $_POST["member{$i}_email"];
        $loanActivity = $_POST["member{$i}_loan_activity"]; // Added loan activity field
        if (!empty($name) && !empty($email)) {
            $sql = "INSERT INTO family_members (family_id, name, email, loan_detected) VALUES ($familyId, '$name', '$email', '$loanActivity')";
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    // Example: send email notification to other family members
    // Example: send email notification to other family members
    $loanTakerEmail = $_POST["member1_email"]; // Assuming member1 is the one taking the loan
    $loanTakerName = $_POST["member1_name"]; // Get the name of the member taking the loan
    $sql = "SELECT name, email FROM family_members WHERE family_id = $familyId AND email != '$loanTakerEmail'";
    $result = $conn->query($sql);
    $emails = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $emails[] = $row["email"];
        }
    }

    include 'send_email.php';
    sendEmailNotification($emails, "Loan activity detected", $loanTakerName); // Send notification with member name


    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <?php include'header.php' ?>
    <div class="container">
        <h1>Family Registration Form</h1>
        <form method="post">
            <label for="family_name">Family Name:</label><br>
            <input type="text" id="family_name" name="family_name"><br>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <label for="member<?php echo $i; ?>_name">Member <?php echo $i; ?> Name:</label><br>
                <input type="text" id="member<?php echo $i; ?>_name" name="member<?php echo $i; ?>_name"><br>
                <label for="member<?php echo $i; ?>_email">Member <?php echo $i; ?> Email:</label><br>
                <input type="email" id="member<?php echo $i; ?>_email" name="member<?php echo $i; ?>_email"><br>
                <label for="member<?php echo $i; ?>_loan_activity">Member <?php echo $i; ?> Loan Activity:</label><br>
                <input type="text" id="member<?php echo $i; ?>_loan_activity" name="member<?php echo $i; ?>_loan_activity"><br>
            <?php endfor; ?>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>