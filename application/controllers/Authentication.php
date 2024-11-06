<?php
class Authentication extends CI_Controller
{
  public function __construct() {
    parent::__construct();
    $myid = $this->session->userdata("loggedin");
      
  
}
public function index()
{
    if (is_loggedin()) {
        redirect(base_url('dashboard'));
    }


      $this->form_validation->set_rules('email', 'Username',  "required");
      $this->form_validation->set_rules("password", "Password", "required");
  
  if ($this->form_validation->run() == NULL) {

  }else{
    //$this->session->unset_userdata('captcha');
    $email       = $this->security->xss_clean($this->input->post("email"));
    $password    = $this->security->xss_clean($this->input->post("password"));
    

    $login_credential = $this->authentication_model->login_credential($email, $password);
  

    if ($login_credential) {
        if ($login_credential->active) {
            if ($login_credential->role == 2) {
                $userType = 'admin';
            } elseif($login_credential->role == 3) {
                $userType = 'user';
            } elseif($login_credential->role == 4) {
              $userType = 'agent';
          } else {
                $userType = 'superdamin';
            }
            $getUser = $this->authentication_model->getUserNameByRoleID($login_credential->role, $login_credential->user_id);
                   // get logger name
                   $sessionData = array(
                    'name' => $getUser['name'],
                    'logger_photo' => $getUser['picture'],
                    'loggedin_id' => $login_credential->id,
                    'loggedin_userid' => $login_credential->user_id,
                    'loggedin_role_id' => $login_credential->role,
                    'loggedin_type' => $userType,
                    'loggedin' => true,
                );
             
                $this->session->set_userdata($sessionData);
                $this->db->update('login_credential', array('last_login' => date('Y-m-d H:i:s')), array('id' => $login_credential->id));
                // is logged in
                if ($this->session->has_userdata('redirect_url')) {
                    redirect($this->session->userdata('redirect_url'));
                } else {
                    redirect(base_url('dashboard'));
                }
        }else {
            $this->session->set_flashdata('error', display('inactive_account'));
           
            redirect(base_url('authentication'));
        }

    }else {
        $this->session->set_flashdata('error', "Username & Password  incorrect");
   
        redirect(base_url('authentication'));
    }

    
  }

    $data = array();
    $data['active'] = "login";
    $data['title'] = "Login"; 

    // $this->load->helper("captcha");

    //       $captcha = create_captcha(array(
    //     'img_path'      => './public/assets/captcha/',
    //     'img_url'       => base_url('public/assets/captcha/'),
    //     'font_path'     => './assets/fonts/captcha.ttf',
    //     'img_width'     => '300',
    //     'img_height'    => 64,
    //     'expiration'    => 600, //5 min
    //     'word_length'   => 4,
    //     'font_size'     => 32,
    //     'img_id'        => 'Imageid',
    //     'pool'          => '23456789abcdefghijkmnpqrstuvwxyz',

        
    //     'colors'        => array(
    //             'background' => array(255, 255, 255),
    //             'border' => array(228, 229, 231),
    //             'text' => array(49, 141, 1),
    //             'grid' => array(241, 243, 246)
    //     )
    //   ));
    //   $data['captcha_word'] = $captcha['word'];
    //   $data['captcha_image'] = $captcha['image'];
    //   $this->session->set_userdata('captcha', $captcha['word']);
  
   $this->load->view('admin/login', $data);
}
 
public function logout() {
  $this->session->sess_destroy();
  redirect("");
}

}


