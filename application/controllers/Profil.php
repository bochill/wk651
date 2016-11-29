<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /*if ($this->session->userdata('nip_wk') == '') {
            redirect('auth/cek_level');
        } elseif ($this->session->userdata('level_wk') == 'admin') {
            redirect('auth/cek_level');
        }*/
        $this->load->model('M_profil');                
    }    

    public function index()
    {
        $valid = $this->form_validation;
        $valid->set_rules('npwp','NPWP','trim|required|is_unique[tbl_profilwp.npwp]', array('required' => '%s wajib diisi', 'is_unique' => '%s pernah direkam'));
        $valid->set_rules('keterangan','Keterangan','trim|required', array('required' => '%s wajib diisi'));
        if($valid->run())
        {
            Profil::simpan();
        }
        
        $this->load->view('input_wp');
    }

    public function simpan()
    {
        $data = array(
            'npwp' => $this->input->post('npwp'),
            'nama_wp' => $this->input->post('nama_wp'),
            'keterangan' => $this->input->post('keterangan'),
            'nama_ar' => $this->input->post('nama_ar'),
            'seksi' => $this->input->post('seksi'),
            'nip_perekam' => $this->input->post('nip_perekam'),
            'perekam' => $this->input->post('perekam')
            );
        $this->M_profil->save($data);
        //$this->db->insert('tbl_profilwp', $data);
        $this->session->set_flashdata('msg_sukses', '<div class="alert alert-success text-center">Profil berhasil direkam<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>');
        redirect('Home/index');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_profilwp');
        redirect('Home/index');
    }

}