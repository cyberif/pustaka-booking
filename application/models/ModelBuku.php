<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBuku extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tampilBuku()
    {
        return $this->db->get('buku')->result_array();
    }

    public function jmlBuku()
    {
        $query = $this->db->get('buku');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
