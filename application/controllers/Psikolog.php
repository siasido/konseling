<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Psikolog extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('Psikolog_M', 'psikolog_m');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
    }

	public function index(){
        isLogout();
		$data['active_menu'] = 'psikolog';
		$data['row'] = $this->psikolog_m->get()->result();
		$data['page_js'] = base_url().'custom-js/psikolog/psikolog-data.js';
		$this->template->load('template', 'psikolog/psikolog_data', $data);
    }
    
    public function add(){
		isLogout();
		$data['active_menu'] = 'psikolog';
		// $data['page_js'] = base_url().'custom-js/psikolog/psikolog-add.js';
		$this->template->load('template', 'psikolog/psikolog_form_add',$data);
    }
    
    public function edit($id){
		isLogout();
		$data['active_menu'] = 'psikolog';
		$data['page_js'] = base_url().'custom-js/psikolog/psikolog-edit.js';
		$data['row'] = $this->psikolog_m->get($id)->row();
		$this->template->load('template', 'psikolog/psikolog_form_edit', $data);
	}

	public function simpan(){
		isLogout();
		$post = $this->input->post(null, true);
		
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('noHandphone', 'No.Handphone', 'trim|numeric|required|min_length[10]|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('spesialisasi', 'Spesialisasi', 'trim|required');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');
		$this->form_validation->set_message('numeric', '{field} harus berisi numerik.');
		$this->form_validation->set_message('is_unique', '{field} sudah digunakan, silahkan ganti.');
		$this->form_validation->set_message('matches', '{field} tidak sesuai dengan kata sandi, silahkan ganti.');


		if ($this->form_validation->run() == FALSE){
			$data['active_menu'] = 'psikolog';
			$data['page_js'] = base_url().'custom-js/psikolog/psikolog-add.js';
			$this->template->load('template', 'psikolog/psikolog_form_add', $data);
		}
		else{

			$data = array(
				'nama' => $post['nama'],
				'gender' => $post['gender'],
				'noHandphone' => $post['noHandphone'],
				'spesialisasi' => $post['spesialisasi'],
				'alamat' => $post['alamat'],
				'email' => $post['email']
			);
			
			if($_FILES['foto']['name'] != null){
				$configurasi['upload_path']          = './uploads/psikolog/';
				$configurasi['allowed_types']        = 'gif|jpg|png|jpeg';
				$configurasi['max_size']             = 5048;
				$configurasi['file_name'] = 'psikolog-'.date('YmdHis');
			
				// do the upload
				$this->upload->initialize($configurasi, TRUE);
			
				if (!$this->upload->do_upload('foto')){ 
					$data = array(
						'error' => $this->upload->display_errors(),
						'active_menu' => 'psikolog'
					);
					$this->template->load('template', 'psikolog/psikolog_form_add', $data);
				}
				else{ //if upload image success

					$data['foto'] = $this->upload->data('file_name');
			
					$this->image_lib->clear();
			
					// insert data to db
					$this->psikolog_m->add($data);
					if($this->db->affected_rows() > 0){
						$this->session->set_flashdata('success', 'Data berhasil disimpan');
						redirect('psikolog/index');
					}
				} 
				
			} else {
			
				$this->psikolog_m->add($data);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
					redirect('psikolog/index');
				}
				
			}
				
		}
	
	}

	public function update(){
		isLogout();
		$post = $this->input->post(null, true);
		
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('noHandphone', 'No.Handphone', 'trim|numeric|required|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');
		$this->form_validation->set_message('numeric', '{field} harus berisi numerik.');
		$this->form_validation->set_message('is_unique', '{field} sudah digunakan, silahkan ganti.');
		$this->form_validation->set_message('matches', '{field} tidak sesuai dengan kata sandi, silahkan ganti.');
		

		if ($this->form_validation->run() == FALSE){
			$data['active_menu'] = 'psikolog';
			$data['row'] = $this->psikolog_m->get($post['idpsikiater'])->row();
			$data['page_js'] = null;
			$this->template->load('template', 'psikolog/psikolog_form_edit', $data);
		}
		else{
			
			$data = array(
				'nama' => $post['nama'],
				'gender' => $post['gender'],
				'noHandphone' => $post['noHandphone'],
				'spesialisasi' => $post['spesialisasi'],
				'alamat' => $post['alamat'],
				'email' => $post['email']
			);

			if($_FILES['foto']['name'] != null){

				$targetFile = $this->psikolog_m->get($post['idpsikiater'])->row()->foto;
				// print_r($targetFile);
				unlink('./uploads/psikolog/'.$targetFile);

				// configurasi upload
				$configurasi['upload_path']          = './uploads/psikolog/';
				$configurasi['allowed_types']        = 'gif|jpg|png|jpeg';
				$configurasi['max_size']             = 5048;
				$configurasi['file_name'] = 'psikolog-'.date('YmdHis');

				// do the upload
				$this->upload->initialize($configurasi, TRUE);

				if (!$this->upload->do_upload('foto')){ //if upload failed
					$error = array(
						'row' => null,
						'active_menu' => 'psikolog',
						'error' => $this->upload->display_errors()
					);
					$this->template->load('template', 'psikolog/psikolog_form_edit', $error);
					// print_r("masuk error upload");
				}
				else{ //if upload image success
					$data['foto'] = $this->upload->data('file_name');

					
					$this->psikolog_m->update($data, $post['idpsikiater']);
					if($this->db->affected_rows() > 0){
						$this->session->set_flashdata('success', 'Data berhasil diupdate');
					}
					redirect('psikolog/index');
					// print_r("masuk ke update dengan foto");
				}
			} else {
				$data['foto'] = $this->psikolog_m->get($post['idpsikiater'])->row()->foto;
				$this->psikolog_m->update($data, $post['idpsikiater']);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('success', 'Data berhasil diupdate');
				}		
				redirect('psikolog/index');
				// print_r("masuk ke update tanpa foto");
			}
				
		}

	}

	public function delete($id){
		isLogout();
		$this->psikolog_m->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('danger', 'Data telah dihapus');
		}
		redirect('psikolog/index');
	}


}
