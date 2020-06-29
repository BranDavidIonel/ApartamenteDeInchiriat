<?php
defined('BASEPATH') OR exit("No direct script access allowed");
class ModelLogIn extends CI_Model{

  public function is_logged_in($username,$userpassword){

  	$this->db->where('userName',$username);//verificare date din baza de date 
  	$this->db->where('password',($userpassword));
        $this->db->from('user');
    $query=$this->db->get();
    if($query->num_rows()==1){
    	return true;
    }else{
    	return false; 
    }
  }
}
