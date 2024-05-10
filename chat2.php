<!DOCTYPE html>
<html>
<head>
  <title>Post with Image</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
  background-image: url('https://files.oaiusercontent.com/file-L879JRlJLBSU07f3RcaOOlHX?se=2024-02-28T05%3A32%3A17Z&sp=r&sv=2021-08-06&sr=b&rscc=max-age%3D31536000%2C%20immutable&rscd=attachment%3B%20filename%3D87547087-e534-4ba9-9f1a-9f9467faf069.webp&sig=4pKgyXw1hJAx4dHvoT7/fazXf/nxgMzxgVvsYLMwCxo%3D');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
}

.post {
  max-width: 600px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  background-color: rgba(17, 34, 64, 0.9);
}

.post img {
  margin-left: 8%;
  max-width: 100%;
  border-radius: 5px;
  margin-bottom: 10px;
}

.post .content {
  line-height: 1.6;
}

.comments {
  margin-top: 20px;
}

.comments h3 {
  color: #ddd;
  margin-bottom: 10px;
}

.comment-form {
  margin-top: 20px;
}

.comment-form label {
  display: block;
  color: #ddd;
  margin-bottom: 5px;
}

.comment-form textarea {
  width: 100%;
  height: 100px;
  resize: vertical;
  padding: 5px;
  border-radius: 3px;
  border: 1px solid #ddd;
}

.comment-form button {
  padding: 5px 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.comment-form button:hover {
  background-color: #0056b3;
}

.comment {
  margin-top: 20px;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 3px;
  background-color: #f9f9f9;
}

.content p{
  color: #ddd;
}
.comment p {
  margin: 0;
}
h2{
  
  color: #64FFDA;
  text-align: center;
}

  </style>
  <link rel="stylesheet" href="header.css">
</head>
<body>
  <?php include 'header.php'?>
  <div class="post">
    <h2>My Post </h2>
    <img src="uploads\mal.jpg" alt="Image Description">
    <div class="content">
      <p>This is the content of my post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec semper arcu, in faucibus ipsum.</p>
    </div>
    <div class="comments">
      <h3>Comments</h3>
      <div class="comment">
        <p>Comment 1: Exellent.</p>
      </div>
      <div class="comment">
        <p>Comment 2: Good.</p>
      </div>
      <div class="comment-form">
        <h3>Add a Comment</h3>
        <form id="commentForm">
          <label for="comment">Your Comment:</label>
          <textarea id="comment" name="comment" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const bannedWords = ['Fuck', 'Fuck You', 'Shit', 'Piss off', 'Dick','Dick head Asshole', 'Son of a bitch', 'Bastard', 'Bitch', 'Damn Dumb', 'Nerd', 'Ginger', 'Bimbo', 'Jock Piss', 'Jerk', 'Stupid', 'Wimp', 'Lame Idiot', 'Fool', 'Retard', 'Loser', 'Pain in the Neck Rubbish', 'Shag', 'Wanker', 'Taking the Piss', 'Twat Bollocks', 'Bugger', 'Choad', 'Crikey', 'Bloody Hell Bloody Oath', 'Root', 'Get Stuffed', 'Bugger', 'Me Cheesy', 'Crazy', 'Creepy', 'Clown', 'Weird']; // Add your list of banned words here

    document.getElementById('commentForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
      var commentText = document.getElementById('comment').value;
      if (commentText.trim() === '') {
        alert('Please enter a comment.');
        return;
      }
      if (containsBannedWords(commentText)) {
        alert('Your comment contains banned words. Please revise your comment.');
        return;
      }
      var commentElement = document.createElement('div');
      commentElement.classList.add('comment');
      commentElement.innerHTML = '<p>' + commentText + '</p>';
      document.querySelector('.comments').insertBefore(commentElement, document.querySelector('.comment-form'));
      document.getElementById('commentForm').reset(); // Reset the form
    });

    function containsBannedWords(text) {
      for (let word of bannedWords) {
        if (text.toLowerCase().includes(word.toLowerCase())) {
          return true;
        }
      }
      return false;
    }
  </script>
</body>
</html>
