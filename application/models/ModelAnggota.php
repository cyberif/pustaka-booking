<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAnggota extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tampilAnggota()
    {
        return $this->db->get('anggota')->result_array();
    }

    public function tambahAnggota($data = null)
    {
        return $this->db->insert('anggota', $data);
    }

    public function jmlAnggota()
    {
        return $this->db->get('anggota')->result_array()->count();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->like('nis', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('kelas', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('agama', $keyword);
        return $this->db->get()->result();
    }
}
