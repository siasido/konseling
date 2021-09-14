<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DassTest_M extends CI_Model {

    public function getKeluhanSaya(){
        $this->db->select();
        $this->db->from('keluhanpasien a');
        $this->db->join('user b', 'a.userid = b.userid');
        $this->db->where('b.userid', $this->session->userdata('userid'));
        $query = $this->db->get();
        return $query;
    }

    public function add($data){
        $this->db->insert('ujian', $data);
    }


    public function getHasilUjian($idkeluhan, $userid){
        $sql = " SELECT sum(b.jawaban) as totalnilai, c.typesoal , a.tglpengajuan, d.nama
                        FROM `keluhanpasien` a 
                        join ujian b on a.idkeluhan = b.idkeluhan 
                        join mastersoal c on c.idsoal = b.idsoal 
                        join user d on b.userid = d.userid 
                    WHERE d.userid = $userid
                    AND a.idkeluhan = $idkeluhan
                    group by c.typesoal ";
        return $this->db->query($sql);
    }

    public function getJawabanDetail($idkeluhan, $userid){
        $this->db->select('*');
        $this->db->from('mastersoal a');
        $this->db->join('ujian b', 'a.idsoal = b.idsoal');
        $this->db->join('keluhanpasien c', 'b.userid = c.userid');
        $this->db->where('b.idkeluhan', $idkeluhan);
        $this->db->where('b.userid', $userid);
        $this->db->where('c.statuskeluhan', 1);
        $this->db->order_by('a.idsoal', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    



}