<?php
	class Version_model extends CI_Model{
        
        protected $table = 'version';
        
		public function __construct(){
			$this->load->database();
		}
        
        public function get_version(){
			$query = $this->db->get_where($this->table, array('ID' => 1));
			return $query->row_array();
        }
        
        public function update_version($valeur){
             $this->db->set('valeur', $valeur);
             $this->db->where('ID',  1);
             return $this->db->update($this->table); 
        }
        
    }