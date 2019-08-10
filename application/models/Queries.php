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
           
        return $this->db->insert('apartamente',$data);
        
    }
    public function getSinglePost($id){
        $this->db->select('id,nume,telefon,pret,adresa,descriere, imagine')->where('id',$id)->from('apartamente');
        
        $query=$this->db->get();
        if($query->num_rows()>0){
            
            return $query->row();
        }
        //return $query->result_array();
    }
    public function updatePost($data,$id){
        $this->load->database();
        return $this->db->update('apartamente', $data, array('id' => $id));
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
    public function importDataRss(){
         $feed_url='http://www.pro-casa.ro/feed/?post_type=listing';
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);
    echo $x;
    $nrLinii=0;
     $linie_import=array();
    foreach($x->channel->item as $entry) {
        $linie_data= array();
        
        $linie_data[]=$nrLinii;
        $linie_data[]=$entry->title;
        $linie_data[]=$entry->link;
        $linie_data[]=$entry->description;
        $linie_import['data'][]=$linie_data;
        unset($linie_data);
        $nrLinii++;
              
    }
    print_r($linie_import);
    
  
        
     foreach ($linie_import['data'] as $key2 =>$value_details){
         echo "data: ".$value_details[0]."<br>";
         echo "data: ".$value_details[1]."<br>";
         echo "data: ".$value_details[2]."<br>";
         echo "data: ".$value_details[3]."<br>";
     }
  
    return "";
    }
    

    
}

