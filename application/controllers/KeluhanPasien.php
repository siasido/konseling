<?php defined('BASEPATH') OR exit('No direct script access allowed');

class KeluhanPasien extends CI_Controller {

    public function __construct(){
		parent::__construct();
		isLogout();
        $this->load->model('User_M', 'user_m');
        $this->load->model('KeluhanPasien_M', 'keluhan_m');
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
		
    }

	public function keluhansaya(){
        
		$data = array(
			'row' => $this->keluhan_m->getKeluhanSaya()->result(),
			'page_js' => base_url().'custom-js/pasien/keluhanpasien-data.js',
			'active_menu' => 'keluhan'
		);

		// print_r($data);
		// echo($this->db->last_query());
		$this->template->load('template-pasien', 'keluhan/keluhanpasien_data', $data);
	}
    
    public function add(){
		
		$data = array(
			'active_menu' => 'keluhan',
			'page_js' => base_url().'custom-js/pasien/keluhanpasien-add.js'
		);
		$this->template->load('template-pasien', 'keluhan/keluhanpasien_form_add',$data);
	}
	
	public function simpankeluhan(){

		$post = $this->input->post(null, true);

		$this->form_validation->set_rules('gejala', 'Gejala yang dialami', 'trim|required|max_length[250]');
		$this->form_validation->set_rules('lamakeluhan', 'Lama Gejala', 'trim|required|max_length[100]');
		
		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');

		if ($this->form_validation->run() == FALSE){
			$data = array(
				'active_menu' => 'keluhan',
				'page_js' => base_url().'custom-js/pasien/keluhanpasien-add.js'
			);
			$this->template->load('template-pasien', 'keluhan/keluhanpasien_form_add',$data);
		}
		else{
			
			$data = array(
                'gejala' => $post['gejala'],
                'lamakeluhan' => $post['lamakeluhan'],
                'userid' => $post['userid'],
				'tglpengajuan' => date("Y-m-d H:i"),
				'statuskeluhan' => 0
			);
			
			print_r($data);

			$this->keluhan_m->add($data);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success', 'Data berhasil diupdate');
			}		
			redirect('keluhanpasien/keluhansaya');

				
		}

	}
	
	public function listkeluhan(){
		isLogout();
		$data = array(
			'row' => $this->keluhan_m->getAllKeluhan()->result(),
			'page_js' => base_url().'custom-js/pasien/keluhanpasien-data.js',
			'active_menu' => 'keluhan'
		);

		// print_r($this->session->userdata());

		// echo($this->db->last_query());
		$this->template->load('template', 'keluhan/keluhanpasien_data', $data);

	}
   

	public function delete($id){
		isLogout();
		$this->pasien_m->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('danger', 'Data telah dihapus');
		}
		redirect('psikolog/index');
	}


}
