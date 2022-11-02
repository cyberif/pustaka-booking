<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Dashboard |Pustaka';
        $data['sidebar'] = 'Pustaka Booking';
        $data['topbar'] = 'Admin';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        // $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        // $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function inputAnggota()
    {

        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', [
            'required' => 'Nama belum diisi!!!'
        ]);
        $this->form_validation->set_rules('nis', 'NIS', 'required|is_unique[anggota.nis]', [
            'required' => 'NIS belum diisi!!!',
            'is_unique' => 'NIS sudah terdaftar!!!'
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas', 'required', [
            'required' => 'Kelas belum diisi!!!'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal lahir belum diisi!!!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat belum diisi!!!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Anggota |Pustaka';
            $data['sidebar'] = 'Pustaka Booking';
            $data['topbar'] = 'Admin';
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/inputAnggota');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'agama' => $this->input->post('agama', true)
            ];

            $this->ModelAnggota->tambahAnggota($data);

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> Data telah ditambahkan!
                </div>'
            );
            redirect('admin/dataAnggota');
        }
    }

    public function dataAnggota()
    {
        $data['anggota'] = $this->ModelAnggota->tampilAnggota();
        $data['title'] = 'Data Anggota |Pustaka';
        $data['sidebar'] = 'Pustaka Booking';
        $data['topbar'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/dataAnggota', $data);
        $this->load->view('templates/footer');
    }

    public function searchAnggota()
    {
        $keyword = $this->input->post('keyword');
        $data['anggota'] = $this->ModelAnggota->get_keyword($keyword);
        $data['title'] = 'Data Anggota |Pustaka';
        $data['sidebar'] = 'Pustaka Booking';
        $data['topbar'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/dataAnggota', $data);
        $this->load->view('templates/footer');
    }

    public function dataUser()
    {
        $data['user'] = $this->ModelUser->tampilUser();
        $data['title'] = 'Data User - Pustaka';
        $data['sidebar'] = 'Pustaka Booking';
        $data['topbar'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/dataUser', $data);
        $this->load->view('templates/footer');
    }
}
