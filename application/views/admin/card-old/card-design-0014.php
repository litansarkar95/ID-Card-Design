<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Design</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.id-card {
    width: 300px;
    background-color: #f4f4f4;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    text-align: center;
    position: relative;
    font-size: 14px;
    color: #333;
}

.logo {
    background-color: #ffb600;
    color: white;
    font-weight: bold;
    padding: 10px 0;
    font-size: 18px;
    position: relative;
}

.photo {
    background: linear-gradient(135deg, #00494d 50%, #ffb600 50%);
    padding: 20px 0;
}

.photo img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 3px solid #fff;
}

.info {
    padding: 20px;
    text-align: left;
}

.info p {
    margin: 5px 0;
}

.footer {
    background-color: #00494d;
    color: white;
    padding: 10px;
    font-size: 12px;
}

    </style>
<body>
    <div class="id-card">
        <div class="logo">LOGO</div>
        <div class="photo">
            <!-- Placeholder for photo -->
            <img src="<?php echo base_url()."public/static/images/organization/0.png"; ?>" alt="User Photo">
        </div>
        <div class="info">
            <p><strong>Id No:</strong> 1090802033250</p>
            <p><strong>Join Date:</strong> 01/01/2020</p>
            <p><strong>Expiry Date:</strong> 01/01/2025</p>
            <p><strong>Email:</strong> example@gmail.com</p>
            <p><strong>Blood:</strong> B+</p>
        </div>
        <div class="footer">
            <p>www.examplewebsite.com</p>
        </div>
    </div>
</body>
</html>
