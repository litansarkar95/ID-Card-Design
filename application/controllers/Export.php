<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Include PhpSpreadsheet files
require_once APPPATH . 'third_party/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
   

        // Fetch data from the model or database
        $data = $this->importexport_model->get_data();

        // Call the function to export the data to Excel
        $this->export_excel($data);
    }

    public function export_excel($data) {
        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set the header row in the Excel sheet (columns can be customized)
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Phone');

        // Write the data to the spreadsheet (starting from row 2)
        $row = 2;
        foreach ($data as $item) {
            $sheet->setCellValue('A' . $row, $item['id']);
            $sheet->setCellValue('B' . $row, $item['name']);
            $sheet->setCellValue('C' . $row, $item['email']);
            $sheet->setCellValue('D' . $row, $item['mobile_no']);
            $row++;
        }

        // Create the writer object and save the file as XLSX
        $writer = new Xlsx($spreadsheet);

        // Set the headers for the file download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="exported_data.xlsx"');
        header('Cache-Control: max-age=0');

        // Save the file to the browser output stream
        $writer->save('php://output');
    }
}
