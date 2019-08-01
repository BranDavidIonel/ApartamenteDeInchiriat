<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_apartamente extends CI_Controller {

	
	 
	public function index()
	{
                $this->load->model('Queries');
                $posts=$this->Queries->getPosts();
                /*
                echo '<pre>';
                print_r($posts);
                echo '</pre>';
                */
		$this->load->view('v_apartamente',['posts'=>$posts]);
	}

        public function view($id){
        $this->load->model('Queries');
        $post=$this->Queries->getSinglePost($id);
        $this->load->view('v_view',['post'=>$post]);

        }


        
        
        
}
