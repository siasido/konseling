<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterSoal_M extends CI_Model {

    protected $table = 'mastersoal';


    public function get(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('idsoal', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function add($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id){
        
        $this->db->where('idrekening', $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id){
        $this->db->where('idrekening', $id);
        $this->db->delete($this->table);
    }
}
