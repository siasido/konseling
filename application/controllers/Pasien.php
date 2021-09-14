<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->model('Pasien_M', 'pasien_m');
        $this->load->model('User_M', 'user_m');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->library('image_lib');
		
    }

	public function index(){
        isLogout();
		$data['active_menu'] = 'pasien';
		$data['row'] = $this->user_m->getPasien()->result();
		$data['page_js'] = base_url().'custom-js/pasien/pasien-data.js';
		$this->template->load('template', 'pasien/pasien_data', $data);
    }
    
    public function add(){
		isLogout();
		$data['active_menu'] = 'pasien';
		$data['page_js'] = null;
		$this->template->load('template', 'pasien/pasien_form_add',$data);
    }
    
    public function edit($id){
		isLogout();
		$data['active_menu'] = 'pasien';
		$data['page_js'] = base_url().'custom-js/pasien/pasien-edit.js';
		$data['row'] = $this->user_m->getPasien($id)->row();
		$this->template->load('template', 'pasien/pasien_form_edit', $data);
	}

	public function simpan(){
		isLogout();
		$post = $this->input->post(null, true);
		
        $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[25]|is_unique[user.username]');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('noHandphone', 'No.Handphone', 'trim|numeric|required|min_length[11]|max_length[13]');
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[20]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');
		$this->form_validation->set_message('numeric', '{field} harus berisi numerik.');
		$this->form_validation->set_message('is_unique', '{field} sudah digunakan, silahkan ganti.');
		$this->form_validation->set_message('matches', '{field} tidak sesuai, silahkan ganti.');


		// print_r($post);

        if ($this->form_validation->run() == FALSE){
			// print_r("masuk false");
            isLogout();
			$data['active_menu'] = 'pasien';
			$data['page_js'] = null;
			$this->template->load('template', 'pasien/pasien_form_add',$data);
        }
        else{
			print_r('jejak di true');
			print_r($_FILES);
			$data = array(
				'username' => $post['username'],
				'nama' => $post['nama'],
				'gender' => $post['gender'],
				'noHandphone' => $post['noHandphone'],
				'email' => $post['email'],
				'alamat' => $post['alamat'],
				'password' => sha1($post['password']),
				'role' => 'pasien'
			);

            if($_FILES['foto']['name'] != null){
                $configurasi['upload_path']          = './uploads/user/';
                $configurasi['allowed_types']        = 'gif|jpg|png|jpeg';
                $configurasi['max_size']             = 5048;
                $configurasi['file_name'] = 'pasien-'.date('YmdHis');
            
                // do the upload
                $this->upload->initialize($configurasi, TRUE);
            
                if (!$this->upload->do_upload('foto')){ 
                    $data = array(
                        'error' => $this->upload->display_errors(),
                        'active_menu' => 'pasien'
                    );
                    $this->template->load('template', 'pasien/pasien_form_add',$data);
                }
                else{ //if upload image success

                    
					$data['foto'] = $this->upload->data('file_name');

                    print_r($data);
            
                    $this->image_lib->clear();
            
                    // // insert data to db
                    $this->user_m->add($data);
                    if($this->db->affected_rows() > 0){
                        $this->session->set_flashdata('success', 'Berhasil Registrasi');
                        redirect('pasien/index');
                        // alert('Berhasil registrasi');
                    }
                } 
                
            } else {
            
                $this->user_m->add($data);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    redirect('user/index');
                }
                
            }
                
        }
		
    }
    
    public function update(){

        $post = $this->input->post(null, true);
        
        
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('noHandphone', 'No.Handphone', 'trim|numeric|required|min_length[10]|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'trim|required');

		$this->form_validation->set_message('required', '{field} masih kosong, silahkan isi.');
		$this->form_validation->set_message('min_length', '{field} minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} maksimal {param} karakter.');
		$this->form_validation->set_message('numeric', '{field} harus berisi numerik.');
		$this->form_validation->set_message('is_unique', '{field} sudah digunakan, silahkan ganti.');
		$this->form_validation->set_message('matches', '{field} tidak sesuai dengan kata sandi, silahkan ganti.');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[20]|callback_username_check');
			
		//if password is set
		if($post['password']){
			$this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required|min_length[4]|max_length[20]');
			$this->form_validation->set_rules('passconf', 'Konfirmasi Sandi', 'trim|required|matches[password]');
		}

		//if passconf is set
		if($post['passconf']){
			$this->form_validation->set_rules('passconf', 'Konfirmasi Sandi', 'trim|required|matches[password]');
		}

		if ($this->form_validation->run() == FALSE){
			$data['active_menu'] = 'psikolog';
			$data['row'] = $this->user_m->getPasien($post['userid'])->row();
			$data['page_js'] = base_url().'custom-js/pasien/pasien-edit.js';
			$this->template->load('template', 'pasien/pasien_form_edit', $data);
		}
		else{
			
			$data = array(
                'nama' => $post['nama'],
                'gender' => $post['gender'],
                'noHandphone' => $post['noHandphone'],
                'username' => $post['username'],
                'alamat' => $post['alamat'],
                'email' => $post['email'],
                'role' => $post['role']
            );

			if($post['password']){
				$data['password'] = sha1($post['password']);
			}

			if($_FILES['foto']['name'] != null){

				$targetFile = $this->user_m->getPasien($post['userid'])->row()->foto;
                // print_r($targetFile);
                if($targetFile){
				    unlink('./uploads/user/'.$targetFile);
                }
                
				// configurasi upload
				$configurasi['upload_path']          = './uploads/user/';
				$configurasi['allowed_types']        = 'gif|jpg|png|jpeg';
				$configurasi['max_size']             = 5048;
				$configurasi['file_name'] = 'user-'.date('YmdHis');

				// do the upload
				$this->upload->initialize($configurasi, TRUE);

				if (!$this->upload->do_upload('foto')){ //if upload failed
					$error = array(
						'row' => null,
						'active_menu' => 'user',
						'error' => $this->upload->display_errors()
					);
					$this->template->load('template', 'user/user_form_edit', $error);
					// print_r("masuk error upload");
				}
				else{ //if upload image success
					$data['foto'] = $this->upload->data('file_name');

					
					$this->user_m->update($data, $post['userid']);
					if($this->db->affected_rows() > 0){
						$this->session->set_flashdata('success', 'Data berhasil diupdate');
					}
					redirect('pasien/index');
					// print_r("masuk ke update dengan foto");
				}
			} else {
				$data['foto'] = $this->user_m->get($post['userid'])->row()->foto;
				$this->user_m->update($data, $post['userid']);
				if($this->db->affected_rows() > 0){
					$this->session->set_flashdata('success', 'Data berhasil diupdate');
				}		
				redirect('pasien/index');
				// print_r("masuk ke update tanpa foto");
			}
				
		}

	}

	public function delete($id){
		$this->pasien_m->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('danger', 'Data telah dihapus');
		}
		redirect('psikolog/index');
	}

	public function username_check(){
		$post = $this->input->post(null, true);
		$query = $this->user_m->username_check($post['username'], $post['userid']);

		if ($query->num_rows() > 0 ){
			$this->form_validation->set_message('username_check', '{field} ini sudah digunakan, silahkan ganti.');
			return FALSE;
		} else {
			return TRUE;
		}
		
	}

}
