<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DassTest extends CI_Controller {

    public function __construct(){
        parent::__construct();
        isLogout();
        $this->load->model('dasstest_m');
        $this->load->model('mastersoal_m');
        $this->load->model('user_m');
        $this->load->model('KeluhanPasien_M', 'keluhan_m');
		$this->load->library('form_validation');
		
    }

	public function index(){
		$data['active_menu'] ='soal';
		$data['row'] = $this->dasstest_m->get()->result();
		$data['page_js'] = base_url().'custom-js/soal/soal-data.js';
		$this->template->load('template', 'dasstest/dasstest_data', $data);
    }

    public function test($idkeluhan){
        $data = array(
            'soal' => $this->mastersoal_m->get()->result(),
            'page_js' => null,
            'active_menu' => 'keluhan',
        );

        $this->session->set_userdata('idkeluhan', $idkeluhan);

        $this->template->load('template-pasien', 'dasstest/halaman_ujian', $data); 
    }

    public function simpan(){
        $post = $this->input->post(null, true);

        // print_r($this->session->userdata());

        foreach ($post as $key => $value) {
            $idsoal = trim(substr($key,7));

            $data = array(
                'idsoal' => $idsoal,
                'userid' => $this->session->userdata('userid'),
                'idkeluhan' => $this->session->userdata('idkeluhan'),
                'jawaban' => $value
            );

            $this->dasstest_m->add($data);

        }

        $temp = array(
            'statuskeluhan' => 1
        );

        $this->keluhan_m->update($temp, $this->session->userdata('idkeluhan'));

        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Jawaban berhasil disimpan');
        }	

        redirect('keluhanpasien/keluhansaya');

    }

    public function lihathasil($idkeluhan, $userid){
        $data = array(
            'row' => $this->hitungHasil($idkeluhan, $userid),
            'page_js' => null,
            'active_menu' => 'keluhan',
            
        );

        // print_r($data['row']);

        $this->template->load('template-pasien', 'dasstest/myresult', $data); 
    }

    public function lihathasildetail($idkeluhan, $userid){
        isLogout();
        $data = array(
            'row' => $this->hitungHasil($idkeluhan, $userid),
            'page_js' => null,
            'active_menu' => 'keluhan',
            
        );

        // print_r($data['row']);

        $this->template->load('template', 'dasstest/resultdetail', $data); 
    }

    public function lihatjawabandetailv1($idkeluhan, $userid){

        $data = array(
            'soal' => $this->dasstest_m->getJawabanDetail($idkeluhan, $userid)->result(),
            'page_js' => null,
            'pasien' => $this->user_m->getPasien($userid)->row(),
            'active_menu' => 'keluhan',
        );

        // print_r($data);
        $this->session->set_userdata('idkeluhan', $idkeluhan);

        $this->template->load('template-pasien', 'dasstest/jawabanpasien', $data); 

    }

    public function lihatjawabandetailv2($idkeluhan, $userid){
        isLogout();
        $data = array(
            'soal' => $this->dasstest_m->getJawabanDetail($idkeluhan, $userid)->result(),
            'pasien' => $this->user_m->getPasien($userid)->row(),
            'page_js' => null,
            'active_menu' => 'keluhan',
        );

        // print_r($data);
        $this->session->set_userdata('idkeluhan', $idkeluhan);

        $this->template->load('template', 'dasstest/jawabanpasien', $data); 
    }

    public function hitungHasil($idkeluhan, $userid){
        $result = $this->dasstest_m->getHasilUjian($idkeluhan, $userid)->result();
        // print_r($result);
        // print_r($this->db->last_query());

        $tingkatStress = "";
        $tingkatKecemasan = "";
        $tingkatDepresi = "";
        $nilaiDepresi = "";
        $nilaiKecemasan = "";
        $nilaiStress = "";

        $data = [];

        foreach ($result as $key => $res) {
            switch ($res->typesoal) {
                case 'kecemasan':
                    if($res->totalnilai > 20) {
                        $tingkatKecemasan = 'SANGAT PARAH';
                    } else if ($res->totalnilai > 15){
                        $tingkatKecemasan = 'PARAH';
                    } else if ($res->totalnilai > 10){
                        $tingkatKecemasan = 'SEDANG';
                    } else if ($res->totalnilai > 8){
                        $tingkatKecemasan = 'RINGAN';
                    } else{
                        $tingkatKecemasan = 'NORMAL';
                    }

                    $nilaiKecemasan = $res->totalnilai;
                    break;

                case 'depresi':
                    if($res->totalnilai > 28) {
                        $tingkatDepresi = 'SANGAT PARAH';
                    } else if ($res->totalnilai > 21){
                        $tingkatDepresi = 'PARAH';
                    } else if ($res->totalnilai > 14){
                        $tingkatDepresi = 'SEDANG';
                    } else if ($res->totalnilai > 10){
                        $tingkatDepresi = 'RINGAN';
                    } else{
                        $tingkatDepresi = 'NORMAL';
                    }
                    $nilaiDepresi = $res->totalnilai;
                    break;

                case 'stress':
                    if($res->totalnilai > 34) {
                        $tingkatStress = 'SANGAT PARAH';
                    } else if ($res->totalnilai > 26){
                        $tingkatStress = 'PARAH';
                    } else if ($res->totalnilai > 19){
                        $tingkatStress = 'SEDANG';
                    } else if ($res->totalnilai > 15){
                        $tingkatStress = 'RINGAN';
                    } else{
                        $tingkatStress = 'NORMAL';
                    }
                    $nilaiStress = $res->totalnilai;
                    break;
                
                default:
                    # code...
                    break;
            }   
        }

        if ($tingkatDepresi == 'SANGAT PARAH' || $tingkatDepresi == 'SANGAT PARAH' || $tingkatDepresi == 'SANGAT PARAH') {
            $intervensi = "Rujuk*";
        } else if ($tingkatDepresi == 'PARAH' || $tingkatDepresi == 'PARAH' || $tingkatDepresi == 'PARAH'){
            $intervensi = "Rujuk*";
        } else if($tingkatDepresi == 'SEDANG' || $tingkatDepresi == 'SEDANG' || $tingkatDepresi == 'SEDANG'){
            $intervensi = "Konseling & Psikoedukasi";
        } else if ($tingkatDepresi == 'RINGAN' || $tingkatDepresi == 'RINGAN' || $tingkatDepresi == 'RINGAN'){
            $intervensi = "Konseling & Psikoedukasi";
        } else{
            $intervensi = '-';
        }

        $result = array(
            'tingkatKecemasan' => $tingkatKecemasan,
            'tingkatDepresi' => $tingkatDepresi,
            'tingkatStress' => $tingkatStress,
            'nilaiKecemasan' => $nilaiKecemasan,
            'nilaiStress' => $nilaiStress,
            'nilaiDepresi' => $nilaiDepresi,
            'nama' => $result[0]->nama,
            'tglKeluhan' => $result[0]->tglpengajuan,
            'intervensi' => $intervensi

        );
        // $data['tingkatKecemasan'] = $tingkatKecemasan;
        // $data['tingkatDepresi'] = $tingkatDepresi;
        // $data['tingkatStress'] = $tingkatStress;
        // $data['nilaiKecemasan'] = $nilaiKecemasan;
        // $data['nilaiStress'] = $nilaiStress;
        // $data['nilaiDepresi'] = $nilaiDepresi;
        // $data['nama'] = $result[0]->nama;
        // $data['tglKeluhan'] = $result[0]->tglpengajuan;

        return $result;
    }

}
