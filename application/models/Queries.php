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
        $this->db->select('id,nume,telefon,pret,adresa,descriere, imagine,link_site,data_postari')->where('id',$id)->from('apartamente');
        
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
    
  
    public function importDataRssPro_casa(){
       
    
        $this->load->database();
        $feed_url='http://www.pro-casa.ro/feed/?post_type=listing';
    $content = file_get_contents($feed_url);
     $x = new SimpleXmlElement($content);
    echo $x;
    $nrLinii=0;
     $linie_import=array();
     //insert data in 
    foreach($x->channel->item as $entry) {
        $linie_data= array();
        
        $linie_data[]=$nrLinii;
        $linie_data[]=$entry->title;
        $linie_data[]=$entry->link;
        $linie_data[]=$entry->description;
        $linie_data[]=$entry->pubDate;
        $linie_import['data'][]=$linie_data;
        unset($linie_data);
        $nrLinii++;
              
    }
    print_r($linie_import);
    
  
        
     foreach ($linie_import['data'] as $key2 =>$value_details){
         echo "data nr Linii: ".$value_details[0]."<br>";
         echo "data title: ".$value_details[1]."<br>";
         echo "data link: ".$value_details[2]."<br>";
         echo "data description: ".$value_details[3]."<br>";
         echo "data date publication: ".$value_details[4]."<br>";
         $getDateSplit= explode(',', $value_details[4]);
         $time = strtotime($getDateSplit[1]);
        $newformat = date('Y-m-d h:i:s',$time);
         echo "data timp: ".$newformat."<br>";
         $pretExtract='';
         //search euru in text
         if(strpos($value_details[1],'euro')){
         $pretExtract=substr($value_details[1], strpos($value_details[1],'euro' )-5,5);
         }
         if(strpos($value_details[1],'Euro')){
         $pretExtract=substr($value_details[1], strpos($value_details[1],'Euro' )-5,5);
         }
         echo '<br> test extract dat'.substr($value_details[1], strpos($value_details[1],'euro' )-5,5).'<br>';
         $sql = "INSERT INTO apartamente (data_postari,descriere,link_site,pret) VALUES (".$this->db->escape($newformat).", ".$this->db->escape($value_details[1]).", ".$this->db->escape($value_details[2]).", ".$this->db->escape($pretExtract).")";
        $this->db->query($sql);
        //echo $this->db->affected_rows();

       // exit();
     }
  
    return "";
    }
   
    

    
}

