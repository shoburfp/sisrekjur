<?php
    class M_login extends CI_Model {

        public function cek_login() {
            $this->db->select('*');
            $this->db->from('tbl_login_admin');
            $query  = $this->db->get();
            return $query;
        }
    } 
?>