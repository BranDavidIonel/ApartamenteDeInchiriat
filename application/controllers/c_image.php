<?php

class C_image extends CI_Controller {
    
    public function index(){
        
        $this->load->view('v_imageUpload');
    } 
  public function uploadPic(){
$config=[
'upload_path'=>'./assets/imagini/',
'allowed_types'=>'gif|png|jpg'
];
$this->load->library('upload',$config);
$this->form_validation->set_error_delimiters();
if($this->upload->do_upload('userfile')){
$data=$this->input->post();
$info=$this->upload->data();
//pun imagini in loc de uploads
$image_path=$info['raw_name'].$info['file_ext'];
echo '<pre>';
print_r($info);
echo '</pre>';
//exit();
$data['imagine']=$image_path;
unset($data['submit']);
$this->load->model('queries');
if($this->queries->insertImage($data)){
echo'imaginea sa inserat';

}
}else{
echo'nu sa inserat';
$this->index();
}
}

public function viewImages(){
$this->load->model('queries');
$images=$this->queries->getImages();
$this->load->view(viewImage,['images'=>$images]);
//print_r($images);
}
}

