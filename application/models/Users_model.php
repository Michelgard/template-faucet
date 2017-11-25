<?php
	class Users_model extends CI_Model{
		
        protected $table = 'users';
        
        public function __construct(){
			$this->load->database();
		}
        
		public function get_user($wallet = FALSE){
			$query = $this->db->get_where($this->table, array('Wallet' => $wallet));
			return $query->row_array();
        }
        
        public function get_userIP($IP = FALSE){
			$query = $this->db->get_where($this->table, array('IP' => $IP));
			return $query->row_array();
        }
        
        public function get_userID($ID = FALSE){
			$query = $this->db->get_where($this->table, array('ID' => $ID));
			return $query->row_array();
        }
        
         public function get_users(){
			$query = $this->db->get($this->table);
			return $query->result_array();
        }
        
        public function count_users_actif(){
            $this->db->get_where($this->table, array('Active' => 1));
            return $this->db->affected_rows();
        }
        
        public function count_users(){
            $this->db->get($this->table);
            return $this->db->affected_rows();
        }
        
        public function insert_user($wallet, $ip, $referal){
            $this->db->set('Wallet',  $wallet);
            $this->db->set('IP',   $ip);
            $this->db->set('Referal', $referal);
            $this->db->set('Last_login', time());
            $this->db->set('Creation_date', time());
            return $this->db->insert($this->table);   
        }
        
        public function update_user($wallet){
             $this->db->set('Last_login', time());
             $this->db->where('Wallet',  $wallet);
             return $this->db->update($this->table); 
        }
        
        public function update_user_claim($ID, $valeur){
             $this->db->set('Next_claim', time());
             $this->db->set('Balance', $valeur);
             $this->db->where('ID',  $ID);
             return $this->db->update($this->table); 
        }
        
        public function update_user_claim_referal($ID, $valeur){
             $this->db->set('Balance', $valeur);
             $this->db->where('ID',  $ID);
             return $this->db->update($this->table); 
        }
        
         public function update_user_active($ID, $valeur){
             $this->db->set('Active', $valeur);
             $this->db->where('ID',  $ID);
             return $this->db->update($this->table); 
        }
        
         public function update_user_captcha($wallet, $val){
             $this->db->set('Captcha', $val);
             $this->db->where('Wallet',  $wallet);
             return $this->db->update($this->table); 
        }
    }