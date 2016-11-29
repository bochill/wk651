<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {		
		if($this->session->userdata('id_wk') == '') {
			$this->load->view('login_view');						
		} else {
			redirect('home/index', 'refresh');
		}
	}

	public function cek_level() {
		if ($this->session->level_pdi == 'member') {
				redirect('home/index', 'refresh');			
			} elseif ($this->session->level_pdi == 'admin') {
				redirect('admin/Admin_ta/index', 'refresh');
			} else {
				$this->load->view('login_view', 'refresh');
			}
	}

	public function cek_login() {
		$valid = $this->form_validation;
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $valid->set_rules('username','Username','trim|xss_clean|required', array('required'=>'%s belum diisi'));
        $valid->set_rules('password','Password','trim|xss_clean|required', array('required'=>'%s belum diisi'));
        if($valid->run()) {
        	Auth::cek_login_2();
        }		
		$this->load->view('login_view');
	}

	public function cek_login_2() {
		$data = array('username' => $this->input->post('username'),
						'password' => $this->input->post('password')
			);
		$this->load->model('Model_user'); // load model_user
		$hasil = $this->Model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {			    			
				$sess_data['id_wk'] = $sess->id;
				$sess_data['username_wk'] = $sess->username;
				$sess_data['nama_wk'] = $sess->nama_ar;
				$sess_data['password_wk'] = $sess->password;
				$sess_data['level_wk'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			
			if ($this->session->userdata('level_wk')=='member') {
				redirect('Home/index');
			}		
		}
		else {			
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>USERNAME / PASSWORD SALAH !!</div>');		      
		}		
	}

	//fungsi logout
    public function logout() {
        $array_session = array(
            'id_wk',
            'username_wk',
            'nama_wk',
            'password_wk', 
            'level_wk');
        $this->session->unset_userdata($array_session);
                          
        $this->load->view('login_view');        
    } 

}



