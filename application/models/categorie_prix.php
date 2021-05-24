<?php
class categorie_prix extends CI_Model{
    public function _constract(){
        $this->load->database();
    }

	public function list($table){
		$query=$this->db->get($table);
		return $query->result_array();
	}
     public function inserer($table,$data){
        
        $this->db->insert($table,$data);
       
     }
     public function editer($table,$data){
         $this->db->where($data);
         $query=$this->db->get($table,$data);
         return $query->row_array();
     }
     public function update($table,$id_tb,$data,$id){
         $this->db->where($id_tb,$id);
         $this->db->update($table,$data);
        
     }
public function delete($table,$data){
         $this->db->where($data);
         $this->db->delete($table);
         
}
}
?>