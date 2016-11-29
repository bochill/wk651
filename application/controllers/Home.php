<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_wk') == '') {
            redirect('auth/cek_level');
        }         
        $this->load->model('M_profil');            
    }
    //index login
    public function index() {
        $data['profil'] = $this->M_profil->get_by_user($this->session->userdata('nama_wk'));                
        $this->load->view('input_wp',$data);
    }

    public function get_wp()
    {
        $term = trim(strip_tags($_GET['term'])); // tambahan baris untuk filtering data
        $query = $this->M_profil->get_wp($term);
        $npwp = array();
        foreach($query as $i) {
            $npwp[] = array(
                'label'=>$i->npwp,
                'npwp'=>$i->npwp,
                'nama_wp'=>$i->nama_wp,
                'seksi'=>$i->seksi,
                'nama_ar'=>$i->nama_ar                
            );            
        }
        echo json_encode($npwp);
    }

    public function validasi()
    {
        $valid = $this->form_validation;
        $valid->set_rules('npwp','NPWP','trim|xss_clean|required|is_unique[tbl_profilwp.npwp]', array('required' => '%s wajib diisi', 'is_unique' => '%s pernah direkam'));
        $valid->set_rules('keterangan','Keterangan','trim|xss_clean|required', array('required' => '%s wajib diisi'));
        if($valid->run())
        {
            Home::simpan();
        }
        $data = array();
        $this->load->view('input_wp',$data);
    }    
}