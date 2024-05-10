<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Awareness for Teenagers</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        .container {
            max-width: 800px;

            background-color: rgba(17, 34, 64, 0.9);
            /* Slightly transparent */
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            color: #8892B0;
        }

        h1 {
            color: #64FFDA;
            text-align: center;
            margin-bottom: 40px;
        }

        section {
            margin-bottom: 20px;
            padding: 20px;
            border-left: 5px solid #64FFDA;
            background-color: rgba(10, 25, 47, 0.8);
            /* Slightly transparent */
        }

        h2 {
            color: #CCD6F6;
            margin-bottom: 15px;
        }

        p {
            margin-bottom: 10px;
        }

        .tips p,
        .challenge p {
            background-color: rgba(17, 34, 64, 0.9);
            /* Slightly transparent */
            padding: 10px;
            border-radius: 10px;
        }

       

        /* Additional styling for visual enhancements */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #64FFDA;
            color: #0A192F;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #52e3c2;
        }
        .body{
            display: flex;
            justify-content: space-around;
        }
        .videos{
            margin: 100px 0px;
            width: 38%;
        }
        .card{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60vh;
    background: linear-gradient(to bottom, #21527f, #06122e); 
    margin: 0;
}
.card-row {
    display: flex;
    width: 60%;
    justify-content: space-between;
  }
  
  .morphic-card {
    width: 26%; /* Adjusts the card width to fit 4 in a row */
    animation: slideDown 0.5s ease-out forwards;
   
    margin-right: 2%;
    height: 50%;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(33, 33, 33, 0.718), 0 6px 6px rgba(31, 29, 29, 0.805);
    transition: transform 0.3s ease-in-out;
  }
  .morphic-card:hover {
    transform: translateY(-10px); /* Adds interaction on hover */
  }
  .morphic-card img {
    width: 100%;
    height: 30vh;
    border-radius: 10px;
    margin-bottom: 15px; /* Adds space between the image and the card content */
  }
  .content-detail {
    text-align: center;
    color: #ddd;
    padding: 10px;
    
  }
  .morphic-card:nth-child(even) {
    margin-top: 40px; /* Adjust this value as needed */
  }
  a{
    text-decoration: none;
    color: #ddd;
  }
    </style>
    <link rel="stylesheet" href="header.css">
    
</head>

<body>

    <?php include'header.php'?>
    <div class="body">
    <div class="container">
        <h1>Secure Your Cyberbullying Knowledge</h1>

        <section id="why-strong-passwords">
            <h2>Cyberbullying: Recognize, Respond, and Prevent</h2>
            <p>Cyberbullying involves the use of digital technologies to harass, embarrass, or target another person. It's a growing concern in today's digital age, affecting individuals across all age groups.</p>
        </section>

        <section id="top-tips">
            <h2>Recognizing Cyberbullying</h2>
            <div class="tips">
                <p>1. Unwanted messages, comments, or images shared online.</p>
                <p>2. Fake profiles created to cause harm or embarrassment.</p>
                
                <p>3.Online threats and intimidation.</p>
              
            </div>
        </section>
        <section id="top-tips">
            <h2>How to Respond</h2>
            <div class="tips">
                <p>1.Do not retaliate or respond to the bully.</p>
                <p>2. Keep evidence of the cyberbullying.</p>
                <p>3. Report the behavior to the platform and consider contacting authorities.</p>
              
            </div>
        </section>
        <section id="top-tips">
            <h2>Prevention Tips</h2>
            <div class="tips">
                <p>1.Adjust privacy settings to limit who can see and contact you online.</p>
                <p>2. Be mindful of what you share online.</p>
                <p>3. Engage in positive online interactions and stand up against bullying.</p>
              
            </div>
        </section>

       
    </div>
   
</div>
<div class="card">
    <div class="card-row">
      <div class="morphic-card" data-aos="fade-up" data-aos-delay="0">
        <a href="chat.php">
          <img src="1.webp" alt="Image 1">
          <div class="content-detail">Think Before You Share
        </a>
      </div>
    </div>
    <div class="morphic-card" data-aos="fade-up" data-aos-delay="100">
      <a href="chat2.php">
        <img src="2.webp" alt="Image 2">
        <div class="content-detail">Safe Space Shield
      </a>
    </div>
  </div>
  <div class="morphic-card" data-aos="fade-up" data-aos-delay="200">
    <a href="process.php">
      <img src="3.jpg" alt="Image 3">
      <div class="content-detail"> Positive Vibes Only
    </a>
  </div>
</body>

</html>
