<?php
// application/libraries/Qr_code.php
require_once(APPPATH . 'libraries/phpqrcode/qrlib.php');

class Qr_code{
    // Function to generate a QR code
    public function generate($data, $filename = null, $size = 4, $level = 'L') {
        // Set the error correction level (L = Low, M = Medium, Q = Quartile, H = High)
        $errorCorrectionLevel = $level;
        // Set the size of the QR code
        $matrixPointSize = $size;

        // If filename is provided, save the QR code to that file, else output it directly to the browser
        if ($filename) {
            // Set the file path where the QR code will be saved
            QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize);
        } else {
            // Output the QR code directly to the browser
            QRcode::png($data, null, $errorCorrectionLevel, $matrixPointSize);
        }
    }
}
