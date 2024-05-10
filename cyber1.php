<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong Password Awareness for Teenagers</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .card {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(to bottom, #21527f, #06122e);
      margin: 0;
    }

    .card-row {
      display: flex;
      width: 60%;
      justify-content: space-between;
    }

    .morphic-card {
      width: 26%;
      /* Adjusts the card width to fit 4 in a row */
      animation: slideDown 0.5s ease-out forwards;

      margin-right: 2%;
      height: 50%;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(33, 33, 33, 0.718), 0 6px 6px rgba(31, 29, 29, 0.805);
      transition: transform 0.3s ease-in-out;
    }

    .morphic-card:hover {
      transform: translateY(-10px);
      /* Adds interaction on hover */
    }

    .morphic-card img {
      width: 100%;
      height: 30vh;
      border-radius: 10px;
      margin-bottom: 15px;
      /* Adds space between the image and the card content */
    }

    .content-detail {
      text-align: center;
      color: #ddd;
      padding: 10px;

    }

    .morphic-card:nth-child(even) {
      margin-top: 40px;
      /* Adjust this value as needed */
    }

    a {
      text-decoration: none;
      color: #ddd;
    }
  </style>
  <link rel="stylesheet" href="header.css">

</head>

<body>

  <?php include 'header.php' ?>

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