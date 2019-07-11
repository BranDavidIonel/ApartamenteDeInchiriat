<?php
class Queries extends CI_Model{
    public function  getPosts(){
        $this->load->database();
        $query= $this->db->get('apartamente');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    public  function addPost($data){
        $this->load->database();
           
        $this->db->insert('apartamente',$data); 
    }
    public function getSinglePost($id){
        $this->db->select('id,nume,telefon,pret,adresa,imagine')->where('id',$id)->from('apartamente');
        
        $query=$this->db->get();
        if($query->num_rows()>0){
            
            return $query->row();
        }
        //return $query->result_array();
    }
    public function updatePost($data,$id){
        $this->load->database();
        $this->db->update('apartamente', $data, array('id' => $id));
    }
    public function deletePost($id){
        $this->load->database();
    return  $this->db->delete('apartamente',['id'=>$id]);

    }
    
    public function insertImage($data){
    return $this->db->insert('imagini',$data);

    }
    public function getImages(){
    $query=$this->db->get('imagini');
    if($query->num_rows()>0){
    return $query->result();
    }
}   
    
}

