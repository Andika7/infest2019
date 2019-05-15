
<?php
class LombaModel extends CI_Model {
 
 function getPosts(){
  $this->db->select("nama_lomba,desc_lomba,image"); 
  $this->db->from('lomba');
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>
