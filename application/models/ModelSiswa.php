<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSiswa extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tampilSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function tambahSiswa($data = null)
    {
        return $this->db->insert('siswa', $data);
    }

    public function jmlSiswa()
    {
        $query = $this->db->get('siswa');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
