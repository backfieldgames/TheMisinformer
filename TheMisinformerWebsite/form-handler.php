<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Thank You</title>
  <link rel='stylesheet' href='style.css'>
  <style>
    body {
      text-align: center;
      padding: 50px;
      font-family: sans-serif;
    }
    .thank-you {
      max-width: 600px;
      margin: 0 auto;
      padding: 40px;
      border: 2px solid #000;
      background: #f9f9f9;
      border-radius: 8px;
    }
    .thank-you h1 {
      margin-bottom: 20px;
    }
    .back-button {
      margin-top: 30px;
      padding: 10px 20px;
      font-weight: bold;
      background-color: black;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      display: inline-block;
    }
    .back-button:hover {
      background-color: #333;
    }
  </style>
</head>
<body>
  <div class='thank-you'>
    <h1>Thank You!</h1>
    <p>Your message has been received. We’ll ignore it shortly.</p>
    <a href='index.html' class='back-button'>Return to Home</a>
  </div>
</body>
</html>";
?>
