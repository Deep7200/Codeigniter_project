<?php

class Car_controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Car_model');
        $this->load->library('form_validation');

        $CI = & get_instance();
        $CI->load->library('session');

        if(!$CI->session->has_userdata('login')){
            redirect('/Car_controller');
        }else{

        }
    }

    public function index()
    {
        $this->load->view('Car_login');
    }

    public function dashboard()
    {
        $this->load->view('Car_view');
    }

    function logout() {
    
        $CI = & get_instance();
        $CI->load->library('session');

        $CI->session->sess_destroy();
        // echo "<pre>";print_r($CI->session);exit;
        redirect('Car_login');
    }

    

    public function car_create()
    {
        $this->load->view('car_create');
       
    }

    public function adddata()
    {
        $data = $this->Car_model->newdata(); 
        echo json_encode($data);
    }

    public function show()
   {
        $data=$this->Car_model->studentList();
        echo json_encode($data);
    }

    public function edit()
    {
        $id=$this->input->get('id');
        $this->load->view('car_edit',$id);
    }
    public function car_edit()
    {
        $this->load->view('car_edit');
    }

    public function edit_test()
    {
        $id=$this->input->get('id');
        $result = $this->Car_model->edit($id);
        echo json_encode($result);   
    }
    

    public function updtitle()
    {
     $data = array(
         'name'=> $this->input->post('name'),
         'gender'=>$this->input->post('gender'),
         'date'=> $this->input->post('date')
     );
     echo "<pre>";print_r($data);
    
     $id=$this->input->post('id');
     $subject=$this->input->post('subject');
     $booktype=$this->input->post('booktype');
     $booktypename=$this->input->post('booktypename');
     $sub_id= $this->input->post('sub_id');
     $ss_id= $this->input->post('ss_id');
     $delete_data = $this->input->post('delete');
     
     for($i=0;$i<count($sub_id);$i++) {
             $sub_data = array(
                 'name'=>$subject[$i],
                 'booktype'=>$booktype[$i],
                 'booktypename'=>$booktypename[$i]
             );
            //  echo "<pre>";print_r($sub_data);exit;
 
          $rows1 = $this->Car_model->updata_sub($sub_data,$sub_id[$i]);
     }  
 
     for($i=0;$i<count($delete_data);$i++) {
     if($delete_data[$i]==1){
         $rows1 = $this->Car_model->removerecord($ss_id[$i]);
     }
     }
 
     $newsubject=$this->input->post('newsubject');
     for($i=0;$i<count($newsubject);$i++) {
         $sub_data = array(
             'name'=>$newsubject[$i]
         );
         $rows = $this->Car_model->newplus_sub($sub_data,$id);
     }


     $newbooktype=$this->input->post('newbooktype');
     for($i=0;$i<count($newbooktype);$i++) {
         $sub_data1 = array(
             'booktype'=>$newbooktype[$i]
         );
         $rows = $this->Car_model->newplus_sub1($sub_data1,$id);
     }
     $rows = $this->Car_model->updata($data,$id);
    }

   public function removebook()
   {
        $id=$this->input->get('id');
        $this->S_model->removerecord($id);
   }

   public function deletedata()
   {
    $id=$this->input->get('id');
    $this->Car_model->deleterecords($id);
   }
}