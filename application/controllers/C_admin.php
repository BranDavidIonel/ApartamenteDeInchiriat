<?php

class C_admin extends CI_Controller{
    public function index()
	{
                $this->load->model('Queries');
                $posts=$this->Queries->getPosts();
                /*
                echo '<pre>';
                print_r($posts);
                echo '</pre>';
                */
		$this->load->view('v_admin',['posts'=>$posts]);
	}
            public function  create(){
            
            $this->load->view('v_create');
            
        }
         public function  update($id){
             //echo $id;
            $this->load->model('Queries');
            $post=$this->Queries->getSinglePost($id);
            $this->load->view('v_update',['post'=>$post]);
            
        }
        public function  save(){
          //  $this->load->database();           
      //$dataEx=$this->input->post();
      //print_r($dataEx);
      //unset($dataEx['submit']);
          $config=[
         'upload_path'=>'./assets/imagini/',
         'allowed_types'=>'gif|png|jpg'
          ];  
         $image_up='';
         /*
         //old code update a single image
         $this->load->library('upload',$config);
         $this->form_validation->set_error_delimiters();
         if($this->upload->do_upload('userfile')){
            
             $info=$this->upload->data();

             $image_up=$info['raw_name'].$info['file_ext'];
   
         }else{
            // echo "nu sa salvat imaginea";
            // exit();
             
         }
          
          */
         //$files = array_filter($_FILES['upload']['name']); //something like that to be used before processing files.

        // Count # of uploaded files in array
        $total = count($_FILES['uploadFiles']['name']);

            // Loop through each file
            for( $i=0 ; $i < $total ; $i++ ) {

            //Get the temp file path
            $tmpFilePath = $_FILES['uploadFiles']['tmp_name'][$i];

            //Make sure we have a file path
            if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "./assets/imagini/" . $_FILES['uploadFiles']['name'][$i];

            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            //echo $_FILES['uploadFiles']['name'][$i];
            $image_up=$image_up.$_FILES['uploadFiles']['name'][$i].',';
            //echo $image_up;
            //used exit for check $image_up
            //exit();

                }
            }
        }
        // I remove last character','  from string with multiple images separetes 
        //through comma
       $image_up=mb_substr($image_up, 0, -1); 
      $data=array(        
       'nume'=>$this->input->post('nume'),         
       'telefon'=>$this->input->post('nrTelefon'),                 
        'pret'=>$this->input->post('pret'),
         'adresa'=>$this->input->post('adresa'),
          'descriere'=>$this->input->post('descriere'),
          'imagine'=>$image_up
        /*'imagine'=>$this->input->post('imagine'),*/    ); 
        
          
   
         $this->load->model('Queries');
         if($this->Queries->addPost($data)){
             //$this->session->set_flashdata('msg','Sa salvat cu succes!');
         }else{
            // $this->session->set_flashdata('msg','Nu sa salvat!');
            echo "".$this->Queries->addPost($data);
            echo "".$this->input->post('descriere');
            
             exit();
             
         }    
         redirect('c_admin/index'); 
                        
        }
        public function change($id){
            $config=[
         'upload_path'=>'./assets/imagini/',
         'allowed_types'=>'gif|png|jpg'
          ];  
         $image_up='';  
         $this->load->library('upload',$config);
         $this->form_validation->set_error_delimiters();
         if($this->upload->do_upload('userfile')){
            
             $info=$this->upload->data();

             $image_up=$info['raw_name'].$info['file_ext'];
   
         }else{
            // echo "nu sa salvat imaginea";
             $image_up=$this->input->post('oldImage');
             //echo "imaginea veche: ".$image_up;
             //exit();
             
         }
            //date preluate din v_update.php                        
            $data=array(
                
       'nume'=>$this->input->post('nume'),         
       'telefon'=>$this->input->post('nrTelefon'),                 
        'pret'=>$this->input->post('pret'),
        'adresa'=>$this->input->post('adresa'),
        'descriere'=>$this->input->post('descriere'),        
        'imagine'=>$image_up,    );        
         $this->load->model('Queries');
         //interogare pt update
         if($this->Queries->updatePost($data,$id)){
             $this->session->set_flashdata('msg','Sa modificat cu succes!');
         }else{
             $this->session->set_flashdata('msg','Nu sa salvat!');
             
         }    
         redirect('c_admin/index'); 
            
        }
        public function view($id){
 //$this->load->view('c_view');
 //echo $id;
    $this->load->model('Queries');
    $post=$this->Queries->getSinglePost($id);
    //echo print_r($post);
    $this->load->view('v_view',['post'=>$post]);

        }

public function delete($id){
    //echo $id;
    $this->load->model('Queries');
    $post=$this->Queries->deletePost($id);
    
    if($this->Queries->deletePost($id)){
       
    $this->session->set_flashdata('msg','Sa sters cu succes!');
    redirect('c_admin/index');
    }else{
    $this->session->set_flashdata('msg','Nu sa  sters !');
    

        
    }
}
      
    
    
    
}

