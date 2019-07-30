<?php

class C_login extends CI_Controller{
    
      public function index(){
        
        $this->load->view('v_form_login');
    }
    public function login(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('username','UserName','trim|required|callback_check_user_login');
	$this->form_validation->set_rules('password','Password','trim|required|md5');
	if($this->form_validation->run()==false){
		$this->index();
	}else{
		$user_session=array(
			'UserName'       =>$this->input->post('username'),
			'Password'       =>$this->input->post('password'),
			'is_logged_in'   => 1
		);
		$this->session->set_userdata($user_session);
		redirect('c_login/admin');
	}
}   
   public function check_user_login(){
   $username=$this->input->post('username');//se trec din formular datele
   $userpassword=$this->input->post('password');
   $this->load->model('ModelLogIn');//se incarca modelul
   if($this->ModelLogIn->is_logged_in($username,$userpassword)){
   	 return true;
   }else{
   	$this->form_validation->set_message('check_user_login','Incorrect Username and Password');
   	return false;
   }

  }
  public function logout(){
  	$this->session->sess_destroy();
  	redirect('c_login/index');
  }

   public function admin(){
		//$this->load->view('v_admin');
                redirect('c_admin');

  }
        
}

