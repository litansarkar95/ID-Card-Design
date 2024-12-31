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
    position: relative;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow: hidden;
}

.header {
    width: 100%;
    height: 80px;
    background: linear-gradient(to right, #FF6B3A, #FF7749);
    border-radius: 10px 10px 0 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.company-logo {
    width: 50px;
    height: auto;
}

.front .profile-pic {
    width: 100px;
    height: 100px;
    margin-top: -30px;
    border-radius: 50%;
    overflow: hidden;
    border: 5px solid white;
}

.profile-pic img {
    width: 100%;
    height: 100%;
}

.info {
    text-align: center;
    color: #333;
    margin-top: 10px;
}

.info h2 {
    font-size: 1.3em;
    color: #FF6B3A;
    margin-bottom: 5px;
}

.job-position {
    color: #333;
    font-weight: bold;
    font-size: 1em;
}

.details {
    font-size: 0.85em;
    color: #666;
}

.barcode {
    margin-top: 10px;
    width: 80%;
    text-align: center;
}

.barcode img {
    width: 100%;
}

.website {
    color: #FF6B3A;
    font-size: 0.8em;
    margin-top: 5px;
    text-align: center;
}

.back h3 {
    color: #FF6B3A;
    font-size: 1.1em;
    margin: 15px 0 5px 0;
    text-align: center;
}

.back ul {
    list-style: none;
    padding: 0;
    font-size: 0.9em;
    color: #666;
    text-align: left;
}

.back ul li {
    margin-bottom: 5px;
}

.contact-info {
    font-size: 0.85em;
    color: #666;
    text-align: center;
    margin-top: 5px;
}

/* Styling Curved Elements */
.front::before,
.back::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: #FF6B3A;
    border-radius: 0 0 50% 50%;
    z-index: -1;
}

.front .header,
.back .header {
    position: relative;
    z-index: 1;
}


    </style>
<body>
<div class="id-card-container">
        <!-- Front of the ID Card -->
        <div class="id-card front">
            <div class="header">
                <img src="company-logo.png" alt="Company Logo" class="company-logo">
            </div>
            <div class="profile-pic">
                <img src="profile.jpg" alt="Profile Picture">
            </div>
            <div class="info">
                <h2>Emily Jones</h2>
                <p class="job-position">Job Position</p>
                <p class="details">ID: 0000000</p>
                <p class="details">Join Date: MM / DD / YY</p>
                <p class="details">Phone: +0000000000</p>
            </div>
            <div class="barcode">
                <img src="barcode.png" alt="Barcode">
            </div>
            <p class="website">www.company.com</p>
        </div>

        <!-- Back of the ID Card -->
        <div class="id-card back">
            <div class="header">
                <img src="company-logo.png" alt="Company Logo" class="company-logo">
            </div>
            <h3>Terms And Conditions:</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Sed diam nonummy nibh euismod tincidunt ut laoreet.</li>
            </ul>
            <h3>Contact Us:</h3>
            <p class="contact-info">Phone: +0000000000</p>
            <p class="contact-info">Email: company@mail.com</p>
            <p class="contact-info">Address: 721 Broadway, New York, NY 10003, USA</p>
        </div>
    </div>
</body>
</html>
