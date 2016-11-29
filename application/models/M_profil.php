<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {
    var $table = 'tbl_profilwp';
    var $column_order = array(null,'nomor_tt','npwp','nama_wp','ttd');
    var $column_search  = array('nomor_tt','npwp','nama_wp','ttd');
    var $order = array('id_ta' => 'desc');

    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_by_user($user)
    {
        $this->db->from($this->table);
        $this->db->where('perekam',$user);
        $this->db->order_by('time_modified', 'desc');
        $query = $this->db->get();
 
        return $query->result();
    }    
 
    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_ta',$id);
        $query = $this->db->get();
 
        return $query->result();
    }
 
    public function save($data)
    {
        $query = $this->db->insert('tbl_profilwp', $data);
        return $query;
    }
 
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
 
    public function delete_by_id($id)
    {
        $this->db->where('id_ta', $id);
        $this->db->delete($this->table);
    }

    public function get_wp($term) 
    {
      $this->db->select('*');
      $this->db->from('tbl_arwp');
      $this->db->like('npwp',$term);            
      $query = $this->db->get();
      if($query->num_rows() > 0) {
        return $query->result();
      }  
    }      

}
