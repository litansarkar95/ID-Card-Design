<?php
class QrCodeController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the QR code library
        $this->load->library('qr_code');
    }
    public function generate_qr3() {
        // vCard data for Md Litan
        $data = "BEGIN:VCARD\nVERSION:3.0\nFN:Md Litan\nTEL:0118\nEMAIL:litan@gmail\nEND:VCARD";
    
        // Generate and save the QR code as an image
        $this->qr_code->generate($data, 'qrcodes/md_litan_vcard.png');
    }

    public function generate_qr() {
        // Example array of users (could be fetched from the database)
        $users = [
            ['name' => 'Md Litan Sarkar', 'email' => 'litan@gmail.com', 'phone' => '01829107469'],
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'phone' => '01987654321'],
            ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'phone' => '01765432100'],
        ];

        // Loop through each user and generate a QR code
        $qr_images = [];
        foreach ($users as $user) {
            // Create vCard data for each user
            $data = "BEGIN:VCARD\nVERSION:3.0\nFN:{$user['name']}\nTEL:{$user['phone']}\nEMAIL:{$user['email']}\nEND:VCARD";
            
            // Generate a unique file name for the QR code
            $file_name = 'qrcodes/' . strtolower(str_replace(' ', '_', $user['name'])) . '_vcard.png';
            
            // Generate and save the QR code as an image
            $this->qr_code->generate($data, $file_name);
            
            // Add the file path to the array of images
            $qr_images[] = $file_name;
        }

        // Optionally, you can pass the user data and image paths to the view
        $this->load->view('qr_code_generated', ['qr_code_images' => $qr_images, 'users' => $users]);
   
    }


    public function generate_qr2() {
        // URL to redirect to
        $url = "https://www.example.com";  // Replace with your URL

        // Generate and save the QR code as an image
        $this->qr_code->generate($url, 'qrcodes/redirect_qr.png');

        // Optionally, you can display the generated QR code in the view
        $this->load->view('qr_code_generated', ['qr_code_image' => 'qrcodes/redirect_qr.png']);
    }
    
    
}
