<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Surfing</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php include 'header.php'?>

    <div class="background-section">

        <div class="slogan">
            <div class="row1">
                <h1>Secure Your <br> Digital World</h1>
                <p id="row1-text"></p>
                
                <p>To Get  Updates  on News and Trends</p><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://thehackernews.com/?m=1"> <button
                    type="submit">Know More</button></a>
            </div>
            <div class="row">
                <h1>Your Data, <br> Your Responsibility</h1>
                <p id="row2-text"></p>
                <p>To Get  Updates  on News and Trends</p><br>
                <button
                    type="submit">Know More</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>



    </div>

    <!-- servies options -->
    <div class="heading">
        <h2>Courses</h2>
    </div>
    <div class="card">
        <div class="card-row">
            <div class="morphic-card" data-aos="fade-up" data-aos-delay="0">
                <a href="education.php">
                    <img src="1.webp" alt="Image 1">
                    <div class="content-detail">Online Privacy Education
                </a>
            </div>
        </div>
        <div class="morphic-card" data-aos="fade-up" data-aos-delay="100">
            <a href="pass.php">
                <img src="2.webp" alt="Image 2">
                <div class="content-detail">Strong Password Management
            </a>
        </div>
    </div>
    <div class="morphic-card" data-aos="fade-up" data-aos-delay="200">
        <a href="fish.php">
            <img src="3.jpg" alt="Image 3">
            <div class="content-detail"> Recognizing Phishing Attempts
        </a>
    </div>
    </div>
    <div class="morphic-card" data-aos="fade-up" data-aos-delay="300">
        <a href="social.php">
            <img src="4.jpg" alt="Image 4">
            <div class="content-detail">Safe Social Media Practices
        </a>
    </div>
    </div>
    <div class="morphic-card" data-aos="fade-up" data-aos-delay="400">
        <a href="cyber.php">
            <img src="5.jpg" alt="Image 4">
            <div class="content-detail">Cyber Bullying
        </a>
    </div>
    </div>
    </div>
    </div>
    <script>
        AOS.init();
    </script>


    <script>
        function toggleService(serviceName) {
            const content = document.getElementById(`${serviceName}-content`);
            content.classList.toggle('show');
        }
    </script>
    <script>
        // Typing effect function
        function typeText(text, elementId, delay) {
            const element = document.getElementById(elementId);
            let index = 0;
            const intervalId = setInterval(function () {
                if (index < text.length) {
                    element.textContent += text.charAt(index);
                    index++;
                } else {
                    clearInterval(intervalId);
                }
            }, delay);
        }

        // Call the typing effect function for row1-text and row2-text
        typeText("Cybercrime is ubiquitous, cybercrime is global, and cybercrime is big business", "row1-text", 50);
        setTimeout(function () {
            typeText("Relying on the government to protect your privacy is like asking a peeping tom to install your window blinds", "row2-text", 50);
        },); // Delay for starting the second row typing effect
    </script>
</body>

</html>