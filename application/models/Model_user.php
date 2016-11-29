<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_user extends CI_Model {
		public function __construct() {
          parent::__construct();
          $this->load->database();
        }

		public function cek_user($data) {
			$query = $this->db->get_where('tbl_user', $data);
			return $query;
		}

		public function getUser($username) {

		}

		public function updatePassword() {
			$nama = $this->session->userdata('nama');
			$password_2 = $this->input->post('password_baru_2');
			$data = array('password' => $password_2);
			$this->db->where('nama', $nama);
			$this->db->update('users', $data);
		}

	}

?>