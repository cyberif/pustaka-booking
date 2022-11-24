<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data['buku'] = $this->ModelBuku->tampilBuku();
        $data['jmlBuku'] = $this->ModelBuku->jmlBuku();
        $data['title'] = 'Data Buku - Pustaka';
        $data['sidebar'] = 'Pustaka Booking';
        $data['topbar'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/dataBuku', $data);
        $this->load->view('templates/footer');
    }

    //BUKU
    public function inputBuku()
    {
        // INI BELUM
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', [
            'required' => 'Nama belum diisi!!!'
        ]);
        $this->form_validation->set_rules('nis', 'NIS', 'required|is_unique[siswa.nis]', [
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
            $data['kategori'] = $this->ModelKategori->tampilKategori();
            $data['title'] = 'Input Buku - Pustaka';
            $data['sidebar'] = 'Pustaka Booking';
            $data['topbar'] = 'Admin';
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/inputBuku', $data);
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

            $this->ModelSiswa->tambahSiswa($data);

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> Data telah ditambahkan!
                </div>'
            );
            redirect('admin/dataSiswa');
        }
    }

    //Kategori
    public function tambahKategori()
    {
        $this->form_validation->set_rules('nama_kategori', 'nama kategori', 'required|is_unique[kategori.nama_kategori]', [
            'required' => 'Kategori belum diisi!!!',
            'is_unique' => 'Kategori sudah ada!!!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Kategori Buku - Pustaka';
            $data['sidebar'] = 'Pustaka Booking';
            $data['topbar'] = 'Admin';
            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/kategoriBuku');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true)),
            ];

            $this->ModelKategori->tambahKategori($data);

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Success!</strong> Kategori telah ditambahkan!
                </div>'
            );
            redirect('buku/kategori');
        }
    }

    public function editKategori($id)
    {

        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', [
            'required' => 'Nama harus diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Kategori',
                'sidebar' => 'Pustaka Booking',
                'topbar' => 'Admin',
                'kategori' => $this->ModelKategori->getIdKategori($id)
            ];

            $this->load->view('templates/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/editKategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true)),
            ];

            $this->ModelKategori->editKategori_proses($data);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> Kategori telah diubah!
                </div>'
            );
            redirect('buku/kategori');
        }
    }

    public function hapusKategori($id)
    {
        $this->ModelKategori->hapusKategori($id);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> Kategori telah dihapus!
            </div>'
        );
        redirect('buku/kategori');
    }

    function kategori()
    {
        $data['kategori'] = $this->ModelKategori->tampilKategori();
        $data['jmlKategori'] = $this->ModelKategori->jmlKategori();
        $data['title'] = 'Kategori Buku - Pustaka';
        $data['sidebar'] = 'Pustaka Booking';
        $data['topbar'] = 'Admin';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/kategoriBuku', $data);
        $this->load->view('templates/footer');
    }
}
