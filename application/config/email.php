<?php
// application/config/email.php

$config['protocol']    = 'smtp';         // Use SMTP
$config['smtp_host']    = 'smtp.yourmail.com'; // Your SMTP server
$config['smtp_port']    = 587;           // SMTP Port
$config['smtp_user']    = 'your_email@example.com'; // Your email address
$config['smtp_pass']    = 'your_email_password'; // Your email password
$config['smtp_crypto']  = 'tls';         // Encryption type (tls/ssl)
$config['mailtype']     = 'html';         // Send emails in HTML format
$config['charset']      = 'utf-8';        // Charset
$config['wordwrap']     = TRUE;           // Word wrapping

?>