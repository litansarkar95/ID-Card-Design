<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Thank You</title>
</head>
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f4f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.thank-you-container {
    text-align: center;
    background-color: white;
    border-radius: 8px;
    padding: 40px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #4CAF50;
    margin-bottom: 20px;
}

p {
    color: #555;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #45a049;
}

    </style>
<body>
    <div class="thank-you-container">
        <h1>Thank You!</h1>
        <p>Your submission has been received.</p>
        <p>We appreciate your feedback.</p>
        <a href="<?php echo base_url(); ?>" class="btn">Go Back to Home</a>
    </div>
</body>
</html>
