<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class KeluhanPasien_M extends CI_Model {

    protected $table = 'keluhanpasien';

    public function getKeluhanSaya(){
        $this->db->select();
        $this->db->from('keluhanpasien a');
        $this->db->join('user b', 'a.userid = b.userid');
        $this->db->where('b.userid', $this->session->userdata('userid'));
        $query = $this->db->get();
        return $query;
    }

    public function add($data){
        $this->db->insert($this->table, $data);
    }

    public function getAllKeluhan(){
        $this->db->select();
        $this->db->from('keluhanpasien a');
        $this->db->join('user b', 'a.userid = b.userid');
        $query = $this->db->get();
        return $query;
    }

    public function update($data, $id){
        
        $this->db->where('idkeluhan', $id);
        $this->db->update($this->table, $data);
    }

}