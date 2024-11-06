<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

class Import extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load helpers, libraries, and models
        $this->load->helper(['url', 'form']);
        $this->load->library('upload');
    }

    // Main page to upload file
    public function index() {
        $this->load->view('import_view');  // A simple view to upload the file
    }

    public function import_excel() {
        // Configuring the file upload
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size'] = 1024 * 10;  // 5 MB Max size
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

            // Process the data
            $this->process_imported_data($data);
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('import');
        }
    }

    // Process dynamic data from Excel
    private function process_imported_data($data) {
        $date =  date('Y-m-d H:i:s');
        // Get the header row (column names)
        $headers = array_shift($data);  // This will remove the first row (header) from the data

        // Initialize an array to hold the insert data
        $insert_data = [];

        // Loop through the rest of the rows and map them to the dynamic columns
        foreach ($data as $row) {
            // Map each row dynamically based on headers
            $row_data = [];
            foreach ($headers as $index => $header) {
                // Check if there is a value for the column, otherwise set it as null
                $row_data[$header] = isset($row[$index]) ? $row[$index] : null;
            }
            $row_data['create_user'] = $this->session->userdata('loggedin_id'); 
            $row_data['create_date']             = strtotime($date);
            // Add this row of data to the insert array
            $insert_data[] = $row_data;
        }

        // Insert the data into the database
        if (!empty($insert_data)) {
            // Insert into the 'users' table (replace with your actual table)
            $this->importexport_model->insert_batch($insert_data);
            $this->session->set_flashdata('success', 'Data imported successfully!');
        } else {
            $this->session->set_flashdata('error', 'No valid data found in the file.');
        }

        redirect('import');
    }
}
