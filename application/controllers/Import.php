<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class Import extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    // Main page to upload file
    public function index() {
        $this->load->view('import_view');  // A simple view to upload the file
    }
    public function import_excel() {
        // Configuring the file upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size'] = 1024 * 10;  // 10 MB Max size
        $config['file_name'] = 'imported_file_' . time();
    
        // Initialize the upload library
        $this->upload->initialize($config);
    
        if ($this->upload->do_upload('excel_file')) {
            // Get uploaded file data
            $upload_data = $this->upload->data();
            $file_path = './uploads/' . $upload_data['file_name'];
    
            // Load the Excel file
            $spreadsheet = IOFactory::load($file_path);
            $sheet = $spreadsheet->getActiveSheet();
            $data = $sheet->toArray();  // Convert sheet data into an array
    
            // Extract images from the Excel file
            $this->extract_images_from_excel($spreadsheet);
    
            // Process the data from Excel (you can adjust this to your own logic)
            $this->process_imported_data($data);
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url() . "admin/customfields/list", "refresh");
        }
    }
    
    private function extract_images_from_excel($spreadsheet) {
        // Create a directory for the images
        $image_dir = './uploads/images/';
        if (!file_exists($image_dir)) {
            mkdir($image_dir, 0777, true);
        }
      
        // Iterate through all the sheets and extract images
        foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {
            foreach ($worksheet->getDrawingCollection() as $drawing) {
                
                // Check if it's an image
                if ($drawing instanceof Drawing) {
                    $imageName = uniqid('image_', true) . '.' . strtolower(pathinfo($drawing->getFilename(), PATHINFO_EXTENSION));
    
                    // Define image path
                    $image_path = $image_dir . $imageName;
                    print_r( $image_path);
                    exit();
                    // Save image to server
                    $drawing->getImageResource();
                    $drawing->getImageResource()->save($image_path);
                 
                    // Optionally, store the image path in your database if necessary
                    // For example: $this->db->insert('images', ['path' => $image_path]);
                }
            }
        }  print_r($image_dir );
     
    }

    private function process_imported_data($data) {
        $date =  date('Y-m-d H:i:s');
        // Get the header row (column names)
        $headers = array_shift($data);  // This will remove the first row (header) from the data
    
        // Initialize an array to hold the insert data
        $insert_data = [];
    
        // Loop through the rest of the rows and map them to the dynamic columns
        foreach ($data as $row) {
            $row_data = [];
            $row_data['ip_address']  = $_SERVER['REMOTE_ADDR'];
            $row_data['date_code']   = date('y');
            $row_data['month_code']  = date('m');
    
            foreach ($headers as $index => $header) {
                $row_data[$header] = isset($row[$index]) ? $row[$index] : null;
    
                // Check for image columns and handle the images
                if (strpos(strtolower($header), 'image') !== false && isset($row[$index])) {
                    // If there's a column for images, store the image path
                    $row_data[$header] = $this->handle_image_in_row($row[$index]);
                }
            }
    
            $row_data['create_user'] = $this->session->userdata('loggedin_id');
            $row_data['create_date']  = strtotime($date);
    
            // Add the processed row data to the insert array
            $insert_data[] = $row_data;
        }
    
        // Insert the data into the database
        if (!empty($insert_data)) {
            $this->importexport_model->insert_batch($insert_data);
            $this->session->set_flashdata('success', 'Data imported successfully!');
        } else {
            $this->session->set_flashdata('error', 'No valid data found in the file.');
        }
    
        redirect(base_url() . "admin/customfields/list", "refresh");
    }

    private function handle_image_in_row($image_data) {
        // Assuming $image_data contains the image URL or base64 string
        if (filter_var($image_data, FILTER_VALIDATE_URL)) {
            return $this->download_image_from_url($image_data);
        } elseif (preg_match('/^data:image\/(\w+);base64,/', $image_data)) {
            return $this->save_image_from_base64($image_data);
        }
    
        return null;
    }

    

}
