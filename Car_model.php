<?php

class Car_model extends CI_Model{

    public $Modal;

    public function __construct()
    {
        parent::__construct();
    }

   
    function validate($user, $pass)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('password', $pass);
        $this->db->where('username', $user);
        $query = $this->db->get();
        $res = $query->result();
        return $res;
    }

    public function chngpass()
	{
		$old_password=$this->input->post('old_password');
        $this->db->select("password");
        $this->db->from('users');
		$this->db->where('password', $old_password);
        $result = $this->db->get()->result_array();
 
        if(isset($result[0]['password']) && !empty($result[0]['password'])){
            $new_password=$this->input->post('new_password');
            $this->db->set('password',$new_password);
            $this->db->where('password',$old_password);
            $this->db->update('users');
            $msg = "sucessfully";
            $code=1;
        }else{
            $code= 0; 
            $msg = "please enter valid old Password";
        }
         
		return compact('code','msg');
	}

    public function resetpass()
    { 
        $token = substr(sha1(rand()), 0, 10);  
        $date = date('Y-m-d H:i:s');  
        $user_id=$this->input->post('user_id');
        $email=$this->input->post('email');

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $res = $query->result_array();

        $string = array(  
         'user_id'=>$res[0]['id'],
         'token'=> $token,
         'email'=>$email,   
         'created'=>$date  
        );
        $this->db->select('*');
        $this->db->from('forgetpasswordtoken');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $res = $query->result_array();

        if(isset($res) && !empty($res[0])){
            echo "Password reset link is expired";
        }else{
            $query = $this->db->insert_string('forgetpasswordtoken',$string);  
            $this->db->query($query);
            $new_password=$this->input->post('new_password');
            $this->db->set('password',$new_password);   
            $this->db->where('email',$email);
            $this->db->update('users');
        }
          

             
    }
    
    public function checkEmailExist(){
        
        $email = $_POST['email'];
        $this->db->select("password");
        $this->db->from('users');
		$this->db->where('email', $email);
        $result = $this->db->get()->result_array();
        if(!empty($result)){
            $msg = "sucessfully";
            $code=1;
           
        }else{
            $code= 0; 
            $msg = "please enter valid Email";
        }
        return compact('code','msg');
    }
    
    // public function update_user($data)
    // {  
    //    $fullname=$this->input->post('fullname');
    //    $this->db->set('fullname',$fullname);
    //     $this->db->where('fullname',$fullname);
    //     $this->db->update('users');

    // }


    function newdata()
    {
        // $img_upload = $_FILES['img_upload']['name'];
//  echo "<pre>";print_r($_FILES);exit;

        // $config = array(
        //     'file_name' =>$img_upload,
        //     'upload_path' => "./assets/image",
        //     'allowed_types' => "jpg|png|jpeg",
        //     'overwrite' => TRUE,
        //     // 'max_size' => "2048000", 
        //     );
        //     // echo "<pre>";print_r($config);
        //     $this->load->library('upload',$config);
            
        //     $this->upload->do_upload('img_upload');
            
        //     $data2=array('upload_data' => $this->upload->data());
          
        // $data = array(
        //     'name'=>$this->input->post('name'),
        //     'date'=>$this->input->post('date'),
        //     'gender'=>$this->input->post('gender'),
        //     'Image' =>$data2['upload_data']['file_name']
        // ); 
        // 
        // $pic=$this->input->post('pic');
		// $trimpic = str_replace(' ', '', $pic);   
        $count = count($_FILES['files']['name']); 
        for($i=0;$i<$count;$i++){ 
        if(!empty($_FILES['files']['name'][$i])){

          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          $config['upload_path'] = '.assets/image';
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['encrypt_name'] = TRUE;         
          $config['file_name'] = $_FILES['files']['name'][$i];
  
    //  echo "<pre>";print_r($_FILES);exit;
   
          $this->load->library('upload',$config);  
          $this->upload->initialize($config); 
            // echo "<pre>";print_r($this->upload->do_upload('files'));exit;

          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            // echo "<pre>";print_r($uploadData);
            $filename = $uploadData['file_name'];	
            // echo "<pre>";print_r($filename);	
            $data['totalFiles'][] = $filename;
            // $data = array('upload_data' => $this->upload->data());
            // $filename = $data['upload_data']['file_name'];
          }

          $data = array(
                'name'=>$this->input->post('name'),
                'date'=>$this->input->post('date'),
                'gender'=>$this->input->post('gender'),
                'profilepic'=>$filename,
            );
            $this->db->insert('student',$data);
        }
    }
   
        $insert_id_sub ="";
        $insert_id_stu = $this->db->insert_id();
        // $sub_data = array(
        //     'name'=>$this->input->post('addmore'),
        //     'booktype'=>$this->input->post('booktype'),
        //     'booktypename'=>$this->input->post('booktypename')
        // );
        for($i=0;$i<count($_POST['addmore']);$i++){
           
            $sub = array(
                'name'=>$_POST['addmore'][$i],
                'booktype'=>$_POST['addmore1'][$i],
                'booktypename'=>$_POST['addmore2'][$i]
            );
            // echo "<pre>";print_r($sub);
            $this->db->insert('subject',$sub);
            $insert_id_sub =  $this->db->insert_id();
            $sub1 = array(
                'student_id '=>$insert_id_stu,
                'subject_id '=>$insert_id_sub,
            ); 
            // echo "<pre>";print_r($sub1);
            $this->db->insert('student_sub',$sub1);
            // echo "<pre>";print_r($sub);exit;
         
        }
        return true;
      
    }

    function edit($id)
    { 
        $this->db->select('GROUP_CONCAT(ss.student_sub_id SEPARATOR "||") as ss_id,student.*,GROUP_CONCAT(subject.name SEPARATOR "||") as sub_name,GROUP_CONCAT(subject.booktype SEPARATOR "||") as book_type,GROUP_CONCAT(subject.booktypename SEPARATOR "||") as book_type_name,GROUP_CONCAT(subject.subject_id SEPARATOR "||") as subject_id');
        $this->db->from('student_sub as ss');
        $this->db->join('student', 'student.student_id = ss.student_id');
        $this->db->join('subject', 'subject.subject_id = ss.subject_id');       
        $this->db->where('student.student_id',$id);        
        $data = $this->db->get()->result_array();
        return $data;
    }
    
    function updata_sub($sub_data,$sub_data_1)
    {
        $this->db->where('subject_id',$sub_data_1);
        $this->db->update('subject',$sub_data);
    }
 

    function newplus_sub($sub_data,$id)
    {
        $this->db->insert('subject',$sub_data);
        $insert_id_sub =  $this->db->insert_id();
        for($i=0; $i < count($sub_data); $i++){
        $newsubj = array(
            'student_id '=>$id,
            'subject_id '=>$insert_id_sub
        ); 
        $this->db->insert('student_sub',$newsubj);
        // echo "<pre>";print_r($newsubj);exit;
    }
    }

    function newplus_sub1($sub_data1,$id)
    {
        $this->db->insert('subject',$sub_data1);
        $insert_id_sub =  $this->db->insert_id();
        for($i=0; $i < count($sub_data1); $i++){
        $newsubj = array(
            'student_id '=>$id,
            'subject_id '=>$insert_id_sub
        ); 
        $this->db->insert('student_sub',$newsubj);
        // echo "<pre>";print_r($newsubj);exit;
    }
    }
    function updata($data,$id)
    {
        $this->db->set($data);
        $this->db->where('student_id',$id);
        $this->db->update('student',$data);
        return $this->db->affected_rows();
    }

    function studentList()
    {
    $this->db->select('student.*,GROUP_CONCAT(subject.name SEPARATOR "<br>") as sub_name,GROUP_CONCAT(subject.booktype SEPARATOR "<br>") as book_type,GROUP_CONCAT(subject.booktypename SEPARATOR "<br>") as book_type_name,GROUP_CONCAT(student.Image SEPARATOR "<br>") as Image_type');
    $this->db->from('student_sub as ss');
    $this->db->join('student', 'student.student_id = ss.student_id');
    $this->db->join('subject', 'subject.subject_id = ss.subject_id');
    $this->db->group_by('student_id');
    $data['data'] = $this->db->get()->result_array();
    return $data;
    }

    function deleterecords($id)
    {
        $this->db->where('student_id',$id);
        $this->db->delete('student');
    }

    function removerecord($id)
    { 
        $this->db->where('student_sub_id',$id);
        $this->db->delete('student_sub');
    }
}
