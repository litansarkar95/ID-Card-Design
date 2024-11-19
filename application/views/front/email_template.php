<!-- application/views/email_template.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        /* Basic styles for email */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }
        .header {
            background-color: #005596;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888888;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="email-container">
    <div class="header">
        <h2>Welcome to Our Service</h2>
    </div>

    <div class="content">
        <p>Hello {name},</p>
        <p>Thank you for joining us! We are excited to have you on board.</p>
        <p>To get started, please verify your email address by clicking the link below:</p>
        <p><a href="{verification_link}">Verify Email</a></p>
        <p>If you have any questions, feel free to contact us.</p>
    </div>

    <div class="footer">
        <p>© 2024 Our Service. All rights reserved.</p>
    </div>
</div>

</body>
</html>
