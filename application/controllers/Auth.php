<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_M', 'user_m');
    }

    public function index()
    {
        isLogin();
        $this->load->view('halamanutama/v_utama');
    }
    
    public function login()
    {
        $post = $this->input->post(null, true);
        if(isset($post['login'])){
            $result = $this->user_m->login($post);
            if($result->num_rows() > 0){
                $row = $result->row();
                $newdata = array(
                    'userid' => $row->userid,
                    'nama' => $row->nama,
                    'foto' => $row->foto,
                    'username' => $row->username,
                    'role' => $row->role
                );

                
                $this->session->set_userdata($newdata);

                if($row->role == 'admin'){
                    echo "masuk admin";
                    redirect('keluhanpasien/listkeluhan');
                    
                } else {
                    echo "masuk pasien";
                    redirect('keluhanPasien/keluhansaya');
                }
                // print_r("Sukses");
            } else{
                echo "<script>
                    alert('Maaf username dan password anda salah');
                    window.location = '".site_url('auth/index')."';
                </script>";
                // print_r("gagal");

            }
        } 
    }


    public function logout(){
        $params = array(
            'userid', 
            'nama', 
            'foto', 
            'username', 
            'role'
        );
        $this->session->unset_userdata($params);
        // $this->session->sess_destroy();
        
        redirect('auth');
    }

}
