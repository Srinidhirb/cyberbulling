<!DOCTYPE html>
<html>

<head>
    <title>Chat Example</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body{
            background-image: url('chat.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .chat-box {
            display: flex;
            justify-content: center;
            /* Center align chat containers horizontally */
        }

        .chat-container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: rgba(17, 34, 64, 0.9);
            margin: 10px;
            padding: 20px;
            width: 300px;
            /* Adjust width as needed */
        }

        .chat-container input[type="text"],
        .chat-container input[type="file"],
        .chat-container button {
            margin-bottom: 10px;
        }

        .chat {
            height: 150px;
            /* Limit chat height */
            overflow-y: auto;
            /* Add scroll bar for overflow */
            padding: 10px;
            color: #ddd;
            background-color: rgba(10, 25, 47, 0.8);
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .chat-container input[type="text"],
        .chat-container input[type="file"] {
            display: block;
            width: 40%;
            padding: 10px;

            border-radius: 5px;
        }

        .chat-container button {
            display: inline-block;
            padding: 10px 20px;
            width: 40%;
            background-color: #64FFDA;
            color: #0A192F;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .chat-container button:hover {
            background-color: #0056b3;
        }

        .flex {
            height: 90vh;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .flex2 {
            display: flex;
            margin: 4% 0;
            justify-content: space-between;
        }

        .custom-upload {
            display: block;
            width: 40%;
            padding: 10px;
            border: 1px solid;
            border-radius: 5px;
            cursor: pointer;
            color: #222222;
            background-color: #f9f9f9;
        }

        .custom-upload:hover {
          
        }

        /* Hide the input field */
        #file1 {
            display: none;
        }
        hr{
            height: 80vh;
        }
        .chat-container h3{
            color: #64FFDA;
            font-size: 1.6rem;
            text-align: center;
            padding: 0 20px 10px;
        }
    </style>
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="flex">
        <div class="chat-container">
            <h3>User1</h3>
            <div class="chat" id="chat1"></div>
            <div class="flex2">
                <input type="file" id="file1">
                <label for="file1" class="custom-upload">Upload File</label>

                <button onclick="sendFile(1)">Send Image</button>
            </div>
            <div class="flex2">
                <input type="text" id="message1" placeholder="Type a message...">
                <button onclick="sendMessage(1)">Send</button>
            </div>
        </div>
<hr>
        <div class="chat-container">
        <h3>User2</h3>
            <div class="chat" id="chat2"></div>
              <div class="flex2">
              <input type="file" id="file1">
                <label for="file1" class="custom-upload">Upload File</label>
            <button onclick="sendFile(2)">Send Image</button>
              </div>
              <div class="flex2">
            <input type="text" id="message2" placeholder="Type a message...">
            <button onclick="sendMessage(2)">Send</button>
              </div>
        </div>
    </div>
    <script>
        function sendMessage(chatId) {
            let message = document.getElementById(`message${chatId}`).value;
            document.getElementById(`message${chatId}`).value = '';
            addToChat(`You: ${message}`, chatId);

            // Send the message to the other chat
            let otherChatId = chatId === 1 ? 2 : 1;
            setTimeout(() => {
                addToChat(`Other:  "${message}"`, otherChatId);
            }, 1000);
        }

        function sendFile(chatId) {
            let fileInput = document.getElementById(`file${chatId}`);
            let file = fileInput.files[0];
            if (!file) {
                return;
            }

            let formData = new FormData();
            formData.append('file', file);

            fetch('check_image.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(result => {
                    if (result === "NSFW") {
                        alert('Nude images are not allowed.');
                    } else {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            let image = new Image();
                            image.src = e.target.result;
                            image.width = 100;

                            addToChat(`You:`, chatId, image);

                            // Send the image to the other chat
                            let otherChatId = chatId === 1 ? 2 : 1;
                            setTimeout(() => {
                                addToChat(`Other: Image received.`, otherChatId, image.cloneNode());
                            }, 1000);
                        };
                        reader.readAsDataURL(file);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function addToChat(message, chatId, element = null) {
            let chat = document.getElementById(`chat${chatId}`);
            let div = document.createElement('div');
            div.textContent = message;
            if (element) {
                div.appendChild(element);
            }
            chat.appendChild(div);
            chat.scrollTop = chat.scrollHeight;
        }
    </script>
</body>

</html>