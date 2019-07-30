<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_apartamente extends CI_Controller {

	
	 
	public function index()
	{
                $this->load->model('queries');
                $posts=$this->queries->getPosts();
                /*
                echo '<pre>';
                print_r($posts);
                echo '</pre>';
                */
		$this->load->view('v_apartamente',['posts'=>$posts]);
	}

        public function view($id){
        $this->load->model('queries');
        $post=$this->queries->getSinglePost($id);
        $this->load->view('v_view',['post'=>$post]);

        }


        
        
        
}
