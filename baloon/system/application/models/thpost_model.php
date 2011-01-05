<?php
/**
 * Description of thpost_model
 *
 * @author      Maikel Chandika <mike_hellsing@yahoo.com>
 */
class Thpost_model extends Model{

    function Thpost_model() {
        parent::Model();
    }

    var $table = 'thpost';
    var $select = 'a.id,a.kategori,b.nama nama_kategori,a.judul,a.isi,a.tgl,a.bln,a.thn,a.inputBy,a.inputDt,a.updateBy,a.updateDt';
    var $from = 'thpost as a,tmkategori as b';
    var $where = 'b.id = a.kategori';
    var $order = 'a.inputDt';

    function count_all_num_rows() {
        return $this->db->count_all($this->table);
    }

    function get_last_ten_post($limit, $offset) {
        $this->db->select($this->select);
        $this->db->from($this->from);
        $this->db->where($this->where);
        $this->db->order_by($this->order, 'desc');
        $this->db->limit($limit, $offset);
        return $this->db->get();
    }
    
    function get_absen_by_id($id) {
        $this->db->select('id,kategori,judul,isi,tgl,bln,thn,inputBy,inputDt,updateBy,updateDt');
        $this->db->where('id',$id);
        return $this->db->get($this->table);
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    function insert($thpost) {
        $this->db->insert_string($this->table, $thpost);
    }

    function update($id, $thpost) {
        $this->db->where('id',$id);
        $this->db->update($this->table, $thpost);
    }
}
?>
