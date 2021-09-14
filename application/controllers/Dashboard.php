<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('psikolog_m');
	}

	public function dashboardAdmin()
	{
		// isLogoutPsikolog();
		$data['active_menu'] = 'dashboard';
		$data['page_js'] = null;
		$data = array(
			'active_menu' => 'dashboard',
			'page_js' => null,
			// 'totalPengemudi' => $this->db->count_all('pengemudi'),
			// 'totalKendaraan' => $this->db->count_all('kendaraan'),
			// 'totalOutlet' => $this->db->count_all('outlet'),
			// 'totalRute' => $this->db->count_all('rute'),
		);
		// print_r($this->session->userdata('usernamePsikolog'));
		$this->template->load('template', 'admin/dashboard_admin',$data);
	}

	public function dashboardPasien()
	{
		// isLogoutPasien();
		$data['active_menu'] = 'dashboard';
		$data['page_js'] = null;
		$data = array(
			'active_menu' => 'dashboard',
			'page_js' => null,
			'paket' => [],
		);
		// print_r($this->session->userdata());
		$this->template->load('template-pasien', 'pasien/dashboard_pasien',$data);
	}


	public function beranda(){
		isLogin();
		$this->load->view('halamanutama/v_utama');
	}

	public function layanankonseling(){
		$this->load->view('halamanutama/v_konsul');
	}

	public function layananpsikotest(){
		$this->load->view('halamanutama/psikotes');
	}

	public function halamandokter(){
		$data['row'] = $this->psikolog_m->get()->result();
		// print_r($data);
		$this->load->view('halamanutama/dokter', $data);
	}

	public function login()
    {
		isLogin();
        $this->load->view('halamanutama/v_login');
	}
	
	public function halamanRegisterPasien(){
		$this->load->view('halamanutama/halaman_register');
	}

}
