<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Include PhpSpreadsheet files
require_once APPPATH . 'third_party/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Excel_import_org extends CI_Controller {

    public function __construct() {
        parent::__construct();
    
    }

 

    public function index($id = Null){
        $data = array();
        $data['active'] = "export";
        $data['title'] =  "export List";
        $data['id']    = $id;
        $data['allCat'] = $this->main_model->AgentOrgList();
        $data['allPdt'] = $this->common_model->view_data("agents", "", "id", "asc");
        $data['content'] = $this->load->view("admin/export/excel_import_org", $data, TRUE);
        $this->load->view('layout/master', $data);
    }

       // Fetch subcategories by category_id via AJAX
       public function fetch_classes() {
        $category_id = $this->input->post('category_id');
        $subcategories = $this->main_model->fetch_classes($category_id,"classes");
        echo json_encode($subcategories);
    }

    public function fetch_sections() {
        $category_id = $this->input->post('category_id');
        $subcategories = $this->main_model->fetch_classes($category_id,"sections");
        echo json_encode($subcategories);
    }

    public function fetch_session() {
        $category_id = $this->input->post('category_id');
        $subcategories = $this->main_model->fetch_classes($category_id,"sessions");
        echo json_encode($subcategories);
    }
    //org form
    public function fetch_org_form() {
        $category_id = $this->input->post('category_id');
        $subcategories = $this->main_model->fetch_classes($category_id,"org_fields");
        echo json_encode($subcategories);
    }
    public function export() {

        $this->form_validation->set_rules("org_form_id", "Organization Form", "required");
        if ($this->form_validation->run() == NULL) {
            $data = array();
            $data['active'] = "export";
            $data['title'] =  "export List";
            $data['id']    = $id;
            $data['allCat'] = $this->main_model->AgentOrgList();
            $data['allPdt'] = $this->common_model->view_data("agents", "", "id", "asc");
            $data['content'] = $this->load->view("admin/export/excelimportorg", $data, TRUE);
            $this->load->view('layout/master', $data);
        } else {
        $id = $this->input->post('org_form_id');
        $data = $this->importexport_model->export_without_date($id);
        $this->export_excel($data);
        }
    }


    public function export_excel($values) {
     

$data = []; 

foreach ($values as $value) {
    // $row = [
    //     'organization_id' => $value['organization_id'],  
    //     'org_fields_id'   => $value['id'],
    // ];

    if ($value['is_name_en'] == 1) {
        $row['name_en'] = '';  
    }

    if ($value['is_name_bn'] == 1) {
        $row['name_bn'] = '';  
    }
    if ($value['is_father_name_en'] == 1) {
        $row['father_name_en'] = '';  
    }
    if ($value['is_father_name_bn'] == 1) {
        $row['father_name_bn'] = '';  
    }
    if ($value['is_mother_name_en'] == 1) {
        $row['mother_name_en'] = '';  
    }
    if ($value['is_mother_name_bn'] == 1) {
        $row['name_bn'] = '';  
    }
    if ($value['is_mobile_no'] == 1) {
        $row['mobile_no'] = '';  
    }
    if ($value['is_email'] == 1) {
        $row['email'] = '';  
    }
    if ($value['is_village_en'] == 1) {
        $row['village_en'] = '';  
    }
    if ($value['is_post_office_en'] == 1) {
        $row['post_office_en'] = '';  
    }
    if ($value['is_upazila_en'] == 1) {
        $row['upazila_en'] = '';  
    }
    if ($value['is_zilla_en'] == 1) {
        $row['zilla_en'] = '';  
    }
    if ($value['is_employee_id'] == 1) {
        $row['employee_id'] = '';  
    }
    if ($value['is_index_no'] == 1) {
        $row['index_no'] = '';  
    }
  
    if ($value['is_class_roll'] == 1) {
        $row['class_roll'] = '';  
    }
    if ($value['is_date_of_birth'] == 1) {
        $row['date_of_birth'] = '2024-11-14';  
    }
    if ($value['is_gender'] == 1) {
        $row['gender'] = 'Male';  
    }
    if ($value['is_id_number'] == 1) {
        $row['id_number'] = '';  
    }
    if ($value['is_blood_group'] == 1) {
        $row['blood_groupil'] = 'A+';  
    }
    if ($value['is_marital_status'] == 1) {
        $row['marital_statu'] = 'Single';  
    }
    if ($value['is_nationality'] == 1) {
        $row['nationality'] = '';  
    }

    // Add email
    //$row['email'] = 'email@example.com'; 
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
    header('Content-Disposition: attachment;filename="sample_import_file.xlsx"');
    header('Cache-Control: max-age=0');

    // Save the file to the output stream (directly to the browser)
    $writer->save('php://output');
}

public function import_excel() {

    $this->form_validation->set_rules("eorganization_name", "Organization Name", "required");
    $this->form_validation->set_rules("org_name_form_id", "Organization Form", "required");
    if ($this->form_validation->run() == NULL) {
        $data = array();
        $data['active'] = "export";
        $data['title'] =  "export List";
        $data['id']    = $id;
        $data['allCat'] = $this->main_model->AgentOrgList();
        $data['allPdt'] = $this->common_model->view_data("agents", "", "id", "asc");
        $data['content'] = $this->load->view("admin/export/excelimportorg", $data, TRUE);
        $this->load->view('layout/master', $data);
    }else{
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
        $file_name = $upload_data['file_name'];  // Get the file name
        // Load the Excel file
        $spreadsheet = IOFactory::load($file_path);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();  // Convert sheet data into an array

        // Process the data
        $this->process_imported_data($data, $file_name);
    } else {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        redirect(base_url() . "admin/customfields/list", "refresh");
    }

}
}

private function process_imported_data($data) {
    $date = date('Y-m-d H:i:s');
    $headers = array_shift($data);  // Extract headers
    
    // Prepare the insert data array outside of the loop
    $insert_data = [];
   

    foreach ($data as $row) {
       
 // Generate unique code for each row
        $agent_id = $this->session->userdata('loggedin_userid');
        $code_random = $this->main_model->number_generator("users_fields", $agent_id);
        $y = date('y');
        $m = date('m');
        
        // Generate registration code
        $code = $y . $m . $agent_id . str_pad($code_random, 3, "0", STR_PAD_LEFT);
        // Prepare row data
        $row_data = [
            'ip_address'              => $_SERVER['REMOTE_ADDR'],
            'date_code'               => $y,
            'month_code'              => $m,
            'code_random'             => $code_random,
            'registration_no'         => $code,
            'agent_id'                => $agent_id,
            'organization_id'         => $this->input->post('eorganization_name'),
            'org_fields_id'           => $this->input->post('org_name_form_id'),
            'class'                   => $this->input->post('class_id'),
            'sessions'                =>$this->input->post('session_id') ,
            'sections'                => $this->input->post('section_id'),
            'is_excel'                => 1,
            'is_active'               => 1,
            'create_user'             => $this->session->userdata('loggedin_id'),
            'create_date'             => strtotime($date),
        ];

        // Process each header value and add it to the row_data
        foreach ($headers as $index => $header) {
            $row_data[$header] = isset($row[$index]) ? $row[$index] : null;
        }
        
        // Add this row to the insert data array
        $insert_data[] = $row_data;
        $this->importexport_model->insert_batch($insert_data);
    }

    // Insert the data into the database
    if (!empty($insert_data)) {
        // Perform the batch insert if we have data to insert
       
        $this->session->set_flashdata('success', 'Data imported successfully!');
    } else {
        // If there's no valid data, set an error message
        $this->session->set_flashdata('error', 'No valid data found in the file.');
    }

    // Redirect to the list page or wherever necessary after the import
     redirect(base_url() . "admin/users", "refresh");
}

public function userreport_export() {
     // Fetch data from the database
     $id = $this->input->post('org_form_id');
     $values = $this->importexport_model->export_without_date($id);
     $allPdt = $this->importexport_model->export_Userfields_date($id);
 
     // Initialize the data array for Excel export
     $data = [];
 
     foreach ($values as $value) {
        // Process 'name_en' and other fields
      
            foreach ($allPdt as $pdt) {
                // Initialize a new row for each product
                $row = [];
                if ($value['is_name_en'] == 1) {
                // Add product name to the row
                $row['Name'] = $pdt->name_en;
            }
                // Add mobile number if required
                if ($value['is_mobile_no'] == 1) {
                    $row['Mobile No'] = $pdt->mobile_no;  // Add mobile number to this row
                }
    
                // Add email if required
                if ($value['is_email'] == 1) {
                    $row['Email'] = $pdt->email;  // Add email to this row
                }
                if ($value['is_class'] == 1) {
                    $row['class'] = $pdt->class;  // Add email to this row
                }
    
                // Add the row to the data array
                $data[] = $row;
            }
      
    }
    
    // Load PhpSpreadsheet library
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    
    // Dynamically set headers (row 1) based on the keys of the first row of data
    $headers = array_keys($data[0]);  // Get the keys of the first row to use as headers
    
    // Set the header row dynamically
    $colIndex = 1;  // Excel columns start from 1 (not 0)
    foreach ($headers as $header) {
        $columnLetter = chr(64 + $colIndex);  // Get the column letter (A, B, C, ...)
        $sheet->setCellValue("{$columnLetter}1", ucfirst($header));  // Capitalize the header for better readability
        $colIndex++;
    }
    
    // Write the data to the spreadsheet starting from row 2 (row 1 is for headers)
    $rowIndex = 2;  // Starting from row 2 because row 1 is used for headers
    foreach ($data as $rowData) {
        $colIndex = 1;  // Reset the column index for each row
        foreach ($headers as $header) {
            $columnLetter = chr(64 + $colIndex);  // Get the column letter (A, B, C, ...)
            $sheet->setCellValue("{$columnLetter}{$rowIndex}", isset($rowData[$header]) ? $rowData[$header] : '');
            $colIndex++;  // Move to the next column
        }
        $rowIndex++;  // Move to the next row
    }
    
    // Create a writer and output the file to the browser for download
    $writer = new Xlsx($spreadsheet);
    
    // Set headers to trigger download of the Excel file
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="exported_data.xlsx"');
    header('Cache-Control: max-age=0');
    
    // Save the file to the output stream (directly to the browser)
    $writer->save('php://output');
    }
}
