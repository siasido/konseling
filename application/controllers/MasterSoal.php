<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MasterSoal extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('mastersoal_m');
		$this->load->library('form_validation');
		
    }

	public function index(){
		isLogout();
		$data['active_menu'] ='soal';
		$data['row'] = $this->mastersoal_m->get()->result();
		$data['page_js'] = base_url().'custom-js/soal/soal-data.js';
		$this->template->load('template', 'mastersoal/mastersoal_data', $data);
    }

    public function add(){
		isLogout();
		$data['active_menu'] = 'soal';
		$data['page_js'] = base_url().'custom-js/soal/soal-add.js';
		$this->template->load('template', 'mastersoal/mastersoal_form_add', $data);
    }

    public function edit($id){
		isLogout();
		$data['active_menu'] = 'rekening';
		$data['page_js'] = base_url().'custom-js/rekening/rekening-edit.js';
		$data['row'] = $this->rekening_m->get($id)->row();
		$this->template->load('template', 'rekening/rekening_form_edit', $data);
	}

    public function simpan(){
		isLogout();
		$post = $this->input->post(null, true);
		
		$this->form_validation->set_rules('isisoal', 'Isi Soal', 'trim|required|max_length[300]');
		$this->form_validation->set_rules('typesoal', 'Tipe Soal', 'trim|required');
		$this->form_validation->set_rules('opsi1', 'Opsi Jawaban 1', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('nilaiopsi1', 'Nilai Opsi 1', 'trim|numeric|required');
		$this->form_validation->set_rules('opsi2', 'Opsi Jawaban 2', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('nilaiopsi2', 'Nilai Opsi 2', 'trim|numeric|required');
		$this->form_validation->set_rules('opsi3', 'Opsi Jawaban 3', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('nilaiopsi3', 'Nilai Opsi 3', 'trim|numeric|required');
		$this->form_validation->set_rules('opsi4', 'Opsi Jawaban 4', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('nilaiopsi4', 'Nilai Opsi 4', 'trim|numeric|required');

        $this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
        $this->form_validation->set_message('numeric', '{field} harus berupa angka');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');

		if ($this->form_validation->run() == FALSE){
			$data['active_menu'] = 'soal';
			$data['page_js'] = base_url().'custom-js/soal/soal-add.js';
			$this->template->load('template', 'mastersoal/mastersoal_form_add', $data);
		}
		else{
			$data = array(
				'idsoal' => $post['idsoal'],
				'isisoal' => $post['isisoal'],
				'typesoal' => $post['typesoal'],
				'opsi1' => $post['opsi1'],
				'nilaiopsi1'=> $post['nilaiopsi1'],
				'opsi2' => $post['opsi2'],
				'nilaiopsi2'=> $post['nilaiopsi2'],
				'opsi3' => $post['opsi3'],
				'nilaiopsi3'=> $post['nilaiopsi3'],
				'opsi4' => $post['opsi4'],
				'nilaiopsi4'=> $post['nilaiopsi4']

			);

			print_r($data);

			$this->mastersoal_m->add($data);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success', 'Data berhasil disimpan');
			}
			redirect('mastersoal/index');	
		}
		
	}
	
	public function update(){
		isLogout();
		$post = $this->input->post(null, true);
		
		$this->form_validation->set_rules('isisoal', 'Isi Soal', 'trim|required|max_length[300]');
		$this->form_validation->set_rules('typesoal', 'Tipe Soal', 'trim|required');
		$this->form_validation->set_rules('opsi1', 'Opsi Jawaban 1', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('nilaiopsi1', 'Nilai Opsi 1', 'trim|numeric|required');
		$this->form_validation->set_rules('opsi2', 'Opsi Jawaban 2', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('nilaiopsi2', 'Nilai Opsi 2', 'trim|numeric|required');
		$this->form_validation->set_rules('opsi3', 'Opsi Jawaban 3', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('nilaiopsi3', 'Nilai Opsi 3', 'trim|numeric|required');
		$this->form_validation->set_rules('opsi4', 'Opsi Jawaban 4', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('nilaiopsi4', 'Nilai Opsi 4', 'trim|numeric|required');

        $this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
        $this->form_validation->set_message('numeric', '{field} harus berupa angka');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');

		if ($this->form_validation->run() == FALSE){
			$data['active_menu'] = 'rekening';
			$data['page_js'] = base_url().'custom-js/rekening/rekening-edit.js';
			$this->template->load('template', 'rekening/rekening_form_edit', $data);
		}
		else{
			$data = array(
				'namaBank' => $post['namaBank'],
				'namaPemilik' => $post['namaPemilik'],
				'noRekening' => $post['noRekening']
			);
			$this->rekening_m->update($data, $post['idrekening']);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('success', 'Data berhasil diupdate');
			}	
			redirect('rekening/index');				
		}

	}
    
    public function delete($id){
		isLogout();
		$this->rekening_m->delete($id);
		$error = $this->db->error();
		
		if($error['code'] == 1451){
			$this->session->set_flashdata('warning', 'rekening yang telah digunakan untuk Transaksi tidak dapat dihapus!');
		} else {
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('danger', 'Data telah dihapus');			
			}
		}
		redirect('rekening/index');
	}

}
