<?php
class Login extends CI_Controller
{

public function index()
{

    $this->form_validation->set_rules('email', 'Email',  "required");
    $this->form_validation->set_rules("password", "Password", "required");

if ($this->form_validation->run() == NULL) {

}else{
  //$this->session->unset_userdata('captcha');
  $email           = $this->security->xss_clean($this->input->post("email"));
  $password        = $this->security->xss_clean($this->input->post("password"));
  $user            = $this->common_model->admin_login($email,$password);

 


  if ($user) {
    
    $userdata = array(
      "id"              => $user->id,
      "first_name"      => $user->first_name,
      "last_name"       => $user->last_name,
      "email"           => $user->email,
      "mobile_no"       => $user->mobile_no,
      "picture"         => $user->picture,
      "authenticated"   => TRUE
  ); 
  $this->session->set_userdata($userdata);

       //last login update
       $selPdt = $this->common_model->view_data("staff", array("id" => $user->id), "id", "desc");
       $data = array(
           "last_login" => time()
       );
       $this->common_model->update_data("staff", $data, array("id" => $user->id));
//device info

      $ip = $this->input->ip_address();

      if ($this->agent->is_browser()) {
          $agent = $this->agent->browser() . ' ' . $this->agent->version();
      } elseif ($this->agent->is_robot()) {
          $agent = $this->agent->robot();
      } elseif ($this->agent->is_mobile()) {

          $agent = $this->agent->mobile();
      } else {
          $agent = 'Unidentified User Agent';
      }

      $platform = $this->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
      //sma_user_logins
      $date = date("Y-m-d H:i:s");
      $data = array(
          "ip_address" => $_SERVER['REMOTE_ADDR'],
          "usersid" => $user->id,
          "email" => $user->email,
          'device_name' => $platform,
          'browser' => $agent,
          "logintime"=>strtotime($date),

      );
    
      $this->common_model->save_data("auth_users_info", $data);
       // End Device
  

       $this->session->set_flashdata('success', 'Welcome Back !');
      
        redirect(base_url() . "dashboard", "refresh");
    
   

  }else{
    $this->session->set_flashdata('error', "Server Error");
  }
}
 
   $data = array();
   $data['active'] = "Home";
   $data['title'] = "login"; 
 //  $data['content'] = $this->load->view("front/login", $data, TRUE);
   $this->load->view('admin/login', $data);
}
}