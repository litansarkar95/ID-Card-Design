<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Design extends CI_Controller {


public function get_template_html() {
    $id = $this->input->post('id');
    $fields_json = $this->input->post('fields');

    $fields = json_decode($fields_json, true);

    if (!$id || !is_array($fields)) {
        echo "<div class='text-warning'>⚠️ কোনো ফিল্ড সিলেক্ট করা হয়নি।</div>";
        return;
    }

    $data['fields'] = $fields;

    $view_file = 'admin/template_htmls/template_' . $id;
    if (file_exists(APPPATH . 'views/' . $view_file . '.php')) {
        $this->load->view($view_file, $data);
    } else {
        echo "<div class='text-danger'>🚫 Template not found.</div>";
    }
}




}
