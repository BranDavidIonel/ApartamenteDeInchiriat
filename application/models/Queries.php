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
    //daca pretul este mai mic decat cel cerut in cautare
    public function searchByPrice($pret){
        $this->load->database();
        $sql = "SELECT id,nume,telefon,pret,adresa,descriere, imagine,link_site,data_postari FROM apartamente WHERE pret < ".$this->db->escape($pret);
        $query=$this->db->query($sql);
         if($query->num_rows()>0){
             //lasat sa fac ceva in caz ca gaseste mai mult de o inregistrare
           return $query->result();
        } else {
           return $query->result();
        }
        
    } 


    //search if it is a new data 
     function checkDataRssPro_casa($data_postari){
    $sql = "SELECT id FROM apartamente WHERE data_postari=".$this->db->escape($data_postari);
        $result=$this->db->query($sql);
        //daca sa gasit o inregistrare atunci nu se mai insereaza 
        if($result->num_rows()>=1){
            return 1;
        }else{
            return 0;
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
    //print_r($linie_import);
         
     foreach ($linie_import['data'] as $key2 =>$value_details){
         echo "data nr Linii: ".$value_details[0]."<br>";
         echo "data title: ".$value_details[1]."<br>";
         echo "data link: ".$value_details[2]."<br>";
         echo "data description: ".$value_details[3]."<br>";
         echo "data date publication: ".$value_details[4]."<br>";
         $getDateSplit= explode(',', $value_details[4]);
         $time = strtotime($getDateSplit[1]);
        $newformat = date('Y-m-d h:i:s',$time);
         echo "<br>data timp: ".$newformat."<br>";
         $pretExtract='';
         //search euro in text
         if(strpos($value_details[1],'euro')){
         $pretExtract=substr($value_details[1], strpos($value_details[1],'euro' )-5,5);
         }
         if(strpos($value_details[1],'Euro')){
         $pretExtract=substr($value_details[1], strpos($value_details[1],'Euro' )-5,5);
         }
        // echo '<br> test extract dat'.substr($value_details[1], strpos($value_details[1],'euro' )-5,5).'<br>';
         //daca data nu se gaseste si este una noua atunci se inseareaza in baza de date
         if(!$this->checkDataRssPro_casa($newformat)){
             echo "<br>sa inserat ".$value_details[1]."<br>".$newformat."<br><br><br>";
              $sql = "INSERT INTO apartamente (data_postari,descriere,link_site,pret) VALUES (".$this->db->escape($newformat).", ".$this->db->escape($value_details[1]).", ".$this->db->escape($value_details[2]).", ".$this->db->escape($pretExtract).")";
             $this->db->query($sql);
         } else {
             echo "<br>nu sa inserat ".$value_details[1]."<br>".$newformat."<br><br><br>";    
         }
        
        

       // exit();
     }
    //echo $this->db->affected_rows();
    return "";
    }
   
    

    
}

