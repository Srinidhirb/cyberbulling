<?php
function check_image($img_path) {
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

$img_path = $_FILES['file']['tmp_name'];
$result = check_image($img_path);
echo $result;
?>
