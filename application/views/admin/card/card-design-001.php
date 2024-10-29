<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Design</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
/* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f4f4f4;
}

.id-card-container {
    display: flex;
    gap: 20px;
}

.id-card {
    width: 250px;
    height: 400px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: white;
    overflow: hidden;
    position: relative;
    padding: 20px;
}

.front .logo, .back .logo {
    text-align: center;
}

.logo img {
    width: 60px;
}

.profile-pic img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 10px auto;
    display: block;
}

.info {
    text-align: center;
    color: #333;
}

.info h2 {
    font-size: 1.2em;
    color: #FF6B3A;
}

.info .job-position {
    color: #333;
    font-weight: bold;
    margin: 5px 0;
}

.info p {
    margin: 5px 0;
    font-size: 0.9em;
}

.barcode img {
    width: 80%;
    margin: 10px auto;
    display: block;
}

.website {
    color: #FF6B3A;
    font-size: 0.8em;
    text-align: center;
}

.back {
    padding: 30px;
    color: #333;
}

.back h3 {
    color: #FF6B3A;
    margin-bottom: 10px;
}

.back ul {
    list-style: none;
    padding-left: 10px;
}

.back ul li {
    font-size: 0.9em;
    margin-bottom: 5px;
}

.back p {
    font-size: 0.85em;
}

    </style>
<body>
    <div class="id-card-container">
        <!-- Front of the ID Card -->
        <div class="id-card front">
            <div class="logo">
                <img src="<?php echo base_url()."public/static/images/logo.png"; ?>" alt="  Rodasi IT">
               
            </div>
            <div class="profile-pic">
                <img src="<?php echo base_url()."public/static/images/organization/0.png"; ?>" alt="Profile Picture">
            </div>
            <div class="info">
                <h2>Emily Jones</h2>
                <p class="job-position">Job Position</p>
                <p>ID: 0000000</p>
                <p>Join Date: MM / DD / YY</p>
                <p>Phone: +0000000000</p>
                <div class="barcode">
                    <!-- Placeholder for Barcode -->
                    <img src="<?php echo base_url()."public/static/images/card_design/barcode-illustration-isolated_23-2150584086.avif"; ?>" height="70px" alt="Barcode">
                </div>
                <p class="website">www.company.com</p>
            </div>
        </div>

        <!-- Back of the ID Card -->
        <div class="id-card back">
            <div class="logo">
                <img src="<?php echo base_url()."public/static/images/logo.png"; ?>" alt="Company Logo">
            </div>
            <h3>Terms and Conditions:</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Sed diam nonummy nibh euismod tincidunt ut laoreet.</li>
            </ul>
            <h3>Contact Us:</h3>
            <p>Phone: +0000000000</p>
            <p>Email: company@mail.com</p>
            <p>Address: 721 Broadway, New York, NY 10003, USA</p>
        </div>
    </div>
</body>
</html>
