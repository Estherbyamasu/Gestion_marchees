<?php

 class M_utilisateur_place_client extends CI_Model{
	public function _constract(){
		$this->load->database();
	}

	public function Insert($table,$data){
		$query=$this->db->insert($table,$data);

		return $query;
	}
    function all($table)
    {

        return $utilisateurs = $this->db->get($table)->result_array();
        
    }

	public function delete($table,$donnee){
		$this->db->where($donnee);
		$query=$this->db->delete($table);
		return $query;
	}

	public function GetElement($table,$donnee){

		$this->db->where($donnee);
		$query=$this->db->get($table,$donnee);
		return $query->row_array();
	}
	public function UpdateDate($table,$donnee,$id){
		$this->db->where($id);
		$query=$this->db->update($table,$donnee);
		return $query;
	}
} 