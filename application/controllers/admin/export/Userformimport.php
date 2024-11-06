<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Include PhpSpreadsheet files
require_once APPPATH . 'third_party/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Userformimport extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

 

    public function view($id){
        $data = array();
        $data['active'] = "export";
        $data['title'] =  "export List";
        $data['id']    = $id;
        $data['allPdt'] = $this->common_model->view_data("agents", "", "id", "asc");
        $data['content'] = $this->load->view("admin/export/userformimport", $data, TRUE);
        $this->load->view('layout/master', $data);
    }

    public function export($id) {
   
        $data = $this->importexport_model->get_data($id);
        $this->export_excel($data);
    }


    public function export_excel($values) {
     

$data = []; 

foreach ($values as $value) {
    $row = [
        'organization_id' => $value['id'],  
    ];

    if ($value['is_name_en'] == 1) {
        $row['name_en'] = 'John Doe';  
    }

    if ($value['is_name_bn'] == 1) {
        $row['name_bn'] = 'John Doe sss';  
    }

    // Add email
    $row['email'] = 'john@example.com'; 
    $row = array_change_key_case($row, CASE_LOWER);
    $data[] = $row;
}
        
        
  

    // Create a new Spreadsheet object
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Dynamically extract the column headers from the keys of the first data item
    $headers = array_keys($data[0]);

    // Set the headers (row 1) dynamically in the Excel sheet
    foreach ($headers as $index => $header) {
        // Convert column index (0, 1, 2, ...) to Excel column letters (A, B, C, ...)
        $columnLetter = chr(65 + $index);  // 65 is the ASCII code for 'A'
        $sheet->setCellValue("{$columnLetter}1", ucfirst($header));  // Capitalize the header for better readability
    }

    // Write the data to the spreadsheet starting from row 2 (row 1 is for headers)
    $row = 2;  // Starting from row 2 because row 1 is used for headers
    foreach ($data as $item) {
        foreach ($headers as $index => $header) {
            // Get the column letter for each field (A, B, C, ...)
            $columnLetter = chr(65 + $index);
            // Set the value for each cell dynamically
            $sheet->setCellValue("{$columnLetter}{$row}", $item[$header]);
        }
        $row++;  // Move to the next row
    }

    // Create a writer and output the file to the browser for download
    $writer = new Xlsx($spreadsheet);

    // Set headers to trigger download of the Excel file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="export.xlsx"');
    header('Cache-Control: max-age=0');

    // Save the file to the output stream (directly to the browser)
    $writer->save('php://output');
}
}
