<?php

function isLogin(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    $user_role = $ci->session->userdata('role');
    if(isset($user_session) && isset($user_role)){
        if($user_role == 'admin') {
            redirect('dashboard/dashboardAdmin');
        } else {
            redirect('keluhanPasien/keluhansaya');
        }
        
    }
}

function isLogout(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    if(!$user_session){
        redirect('auth');
    }
}

