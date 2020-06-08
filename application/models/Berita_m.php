<?php
class Berita_m extends CI_Model{

    function select_db(){
        return $this->db->query("select * from berita")->result();
    }

    function insert_db($data){
        $this->db->insert('berita', $data);
    }

    function edit_db($id,$data){
        $this->db->where('id_berita',$id);
        $this->db->update('berita',$data);
    }

    function select_berita(){
        $query = $this->db->query("SELECT * FROM berita order by tanggal desc limit 10");
        return $query->result();
    }

    function select_id($id){
        return $this->db->query("Select * FROM berita WHERE id_berita='$id'")->result();
    }

    function delete($id){
        $this->db->where('id_berita',$id);
        $this->db->delete('berita');
    }

}