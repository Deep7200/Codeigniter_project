<?php

class Car_login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        
        $this->load->model('Car_model');
      
    }

    public function index()
    { 
            $this->load->view('Carlogin');
    }
    

    public function carchange_password()
    {
        $this->load->view('carchange_password');
    }

    public function carforgot_password()
    {
        $this->load->view('carforgot_password');
    }

    function getLogin()
    {
        
        $CI = & get_instance();
        $CI->load->library('session');
        $code =  0;
        $msg ="Invalid username and password";
        
        $username = $this->input->post('UserName');
        $Password = $this->input->post('Password');
        $rememberme = $this->input->post('remember');
    
        // if (!isset($username) || $username == '' || $username == 'undefined') {
            
        //     echo 2;
        //     exit();
        // }

        // if (!isset($Password) || $Password == '' || $Password == 'undefined') {
            
        //     echo 3;
        //     exit();
        // }
        
        $this->form_validation->set_rules('UserName', 'UserName', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
     
        if ($this->form_validation->run() == FALSE) {
         
            $code =  3;
            $msg = "abc";
         
        } else if ($rememberme == 'check'){
            
            $Login = new Car_model();
            
            $result = $Login->validate($username, $Password);
         
            if (count($result) == 1) {
                
                $data = array(
                    'id' => $result[0]->id,
                    'username' => $result[0]->username
                );
                setcookie ("user_id",$username,time()+ (120));  
                setcookie ("user_password",$Password,time()+ (120));

                $CI->session->set_userdata('login', $data);
              
                $code = 1;
                $msg = "Succesfully Login!";
              
            }
        }
        else if($rememberme == 'uncheck'){
            $Login = new Car_model();
            $result = $Login->validate($username, $Password);
            if (count($result) == 1) {
                $data = array(
                    'id' => $result[0]->id,
                    'username' => $result[0]->username
                );
                // echo "<pre>";print_r($data);exit;
                $CI->session->set_userdata('login', $data); 
                // echo'<pre>';print_r($this->session->userdata());    
                $code = 2;
                $msg = "Something went wrong!";
                exit;
            } 
        }
        else {
                echo 4;
        }
         echo json_encode(compact('code','msg'));
    }

    public function carchangePassword1()
    {
        $this->load->view('carchange_password');
    }

    public function carreset_password()
    {
        $this->load->view('carreset_password');
    }

    public function resetpassword()
    {
        $result = $this->Car_model->resetpass();
        echo json_encode($result);
    }

    public function changepassword()
    {
         $result = $this->Car_model->chngpass();
         echo json_encode($result);
    }

    public function send_mail() { 
        
         $result = $this->Car_model->checkEmailExist();
         echo json_encode($result);
         
        
    } 
}