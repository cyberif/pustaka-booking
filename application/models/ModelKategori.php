<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKategori extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tampilKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function tambahKategori($data = null)
    {
        return $this->db->insert('kategori', $data);
    }

    public function getIdKategori($id)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();
    }

    public function hapusKategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    public function editKategori_proses($data = null)
    {
        $id_kategori = $this->input->post('id_kategori');
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori', $data);
    }

    public function jmlKategori()
    {
        $query = $this->db->get('kategori');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
