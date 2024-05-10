<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recognizing Phishing Attempts</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #121212; /* Dark background */
            color: #e0e0e0; /* Light text color for readability */
            margin: 0;

            line-height: 1.6;
        }
        .content {
            max-width: 800px;
            margin: auto;
            background-color: #1e1e1e; /* Slightly lighter dark shade for content background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        h1, h2 {
            color: #90caf9; /* Soft blue for headings */
        }
        h1 {
            text-align: center;
        }
        .section {
            background-color: #2a2a2a; /* Darker section background for distinction */
            margin: 20px 0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }
        p, ul {
            margin: 15px 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            color: #80cbc4; /* Teal color for links */
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        *{
            margin: 0;
            padding: 0;
        }
    </style>
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php include 'header.php'?>
    <div class="content">
        <h1>How to Recognize Phishing Attempts</h1>
        <p>Phishing is a cybercrime in which targets are contacted by email, telephone, or text message by someone posing as a legitimate institution to lure individuals into providing sensitive data. Recognizing these attempts is crucial for online security.</p>

        <div class="section">
            <h2>Common Signs of Phishing</h2>
            <ul>
                <li><strong>Unsolicited Requests for Information:</strong> Be wary of emails or messages asking for personal or financial information.</li>
                <li><strong>Generic Greetings:</strong> Phishing attempts often use generic language like "Dear Customer" instead of your name.</li>
                <li><strong>Urgent or Threatening Language:</strong> Messages may create a sense of urgency, pressuring you to act quickly.</li>
                <li><strong>Misspellings and Poor Grammar:</strong> Professional organizations typically ensure their communications are error-free.</li>
                <li><strong>Odd Email Addresses:</strong> The sender's email may look suspiciously different from the legitimate organization's address.</li>
                <li><strong>Links in Email:</strong> Hover over any links to see the actual URL before clicking. Phishing links often lead to fake websites.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Preventing Phishing Attacks</h2>
            <p>To protect yourself from phishing, never provide personal information through email, verify the sender's identity, and use security measures like spam filters and antivirus software. For more help, visit <a href="https://www.consumer.ftc.gov/articles/how-recognize-and-avoid-phishing-scams">FTC’s guide on phishing</a>.</p>
        </div>
    </div>
</body>
</html>