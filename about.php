<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            color: #eee;
            line-height: 1.6;
        }
        
        .wrapper {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            padding: 2rem 0;
        }
        
        header h1 {
            color: #0f62fe;
            font-size: 2.5rem;
        }
        
        main {
            margin-top: 20px;
        }
        
        section {
            margin-bottom: 2rem;
            background: #1c1c1c;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }
        
        section:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease-in-out;
        }
        
        h2 {
            color: #0f62fe;
        }
        
        .team-members {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .member {
            text-align: center;
        }
        
        .member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #0f62fe;
        }
        
        .member p {
            margin: 10px 0 5px;
        }
        
        .name {
            color: #fff;
            font-weight: bold;
        }
        
        .role {
            color: #aaa;
            font-style: italic;
        }
        
        .contact {
            text-align: center;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: #0f62fe;
            color: #fff;
        }
        
        footer p {
            margin: 0;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .team-members {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }
    </style>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php include 'header.php'?>
    <div class="wrapper">
        <header>
            <h1>About Us</h1>
        </header>
        <main>
            <section class="mission">
                <h2>Our Mission</h2>
                <p>In the rapidly evolving digital era, where technology seamlessly integrates into every facet of our lives, the significance of cybersecurity has never been more paramount. We, a dedicated group of 3rd-year B.Tech students specializing in Artificial Intelligence and Data Science at a leading university, are on a mission to illuminate the path toward a safer digital future. Our journey into the realms of AI and data science has not only equipped us with cutting-edge technical skills but has also instilled in us a profound understanding of the ethical implications and security challenges that accompany technological advancements.
                    
                    Cybersecurity, in its essence, is not just about protecting systems and data from malicious attacks; it's about safeguarding our way of life in the digital world. As technology continues to advance at a breakneck pace, the sophistication of cyber threats evolves in tandem, posing an ever-increasing risk to individuals, organizations, and nations alike. Recognizing this, our mission is two-fold: to empower individuals with the knowledge and tools to protect themselves in the cyber realm and to foster innovation in cybersecurity solutions through the application of AI and data science.
                    
                    Education and awareness are at the heart of our mission. We recognize that the challenge of cybersecurity is too vast for any single entity to tackle alone. Therefore, we seek to collaborate with like-minded individuals, organizations, and industry experts. Through partnerships and collaborative projects, we aim to pool knowledge, resources, and expertise to address complex cybersecurity challenges more effectively.
                    
                    In conclusion, our mission transcends the boundaries of academia. It's about harnessing the power of AI and data science for the greater good, inspiring a new generation of cybersecurity advocates, and innovating for a secure digital tomorrow. Together, we can create a future where technology empowers, protects, and enriches lives, free from the shadow of cyber threats.</p>
            </section>
            <section class="team">
                <h2>Meet the Team</h2>
                <div class="team-members">
                    <div class="member">
                        <img src="member1.jpg" alt="Team Member">
                        <p class="name">Dhaarini K N Hathwar</p>
                        <p class="role">Founder </p>
                    </div>
                    <div class="member">
                        <img src="member2.jpg" alt="Team Member">
                        <p class="name">Srinidhi R Bharadwaj</p>
                        <p class="role">Founder </p>
                    </div>
                    <div class="member">
                        <img src="member3.jpg" alt="Team Member">
                        <p class="name">Pravallika K R</p>
                        <p class="role">Founder </p>
                    </div>
                    <div class="member">
                        <img src="member4.jpg" alt="Team Member">
                        <p class="name">Yashas Kishore</p>
                        <p class="role">Founder </p>
                    </div>
                    <div class="member">
                        <img src="member5.jpg" alt="Team Member">
                        <p class="name">Lokesh J</p>
                        <p class="role">Founder </p>
                    </div>

                </div>
            </section>
            <section class="contact">
                <h2>Get In Touch</h2>
                <p>We're always looking to expand our community. Reach out to join the fight against cybercrime.</p>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Cybersecurity Awareness. All rights reserved.</p>
        </footer>
    </div>

</body>
</html>