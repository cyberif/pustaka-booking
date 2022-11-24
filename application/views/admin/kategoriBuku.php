<div class="container-fluid">
    <div class="col-lg-7 card shadow mx-auto mt-3">
        <h3 class="card-header text-primary text-center mb-2 ">
            Data Kategori Buku
        </h3>
        <div class="card-body">
            <div class="table table-striped">
                <div class="row p-2">
                    <div class="col">
                        <h5 class="font-weight-bolder text-primary">
                            <?= "Result : " . $jmlKategori; ?>
                        </h5>
                    </div>
                    <div class="col-lg-6 ml-auto">
                        <?= form_open('admin/searchBuku');  ?>
                        <div class="input-group">
                            <input type="text" class="form-control" name="searchBuku" placeholder="Cari keyword...">
                            <span class="input-group-btn">
                                <button class="btn btn-outline-primary " type="submit">Cari</button>
                            </span>
                        </div>
                        <?= form_close();  ?>
                    </div>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <div class="row">
                    <a href="#" class="btn btn-sm btn-primary mb-2 ml-3" data-toggle="modal" data-target="#tambahKategoriModal"><i class="fa-solid fa-plus"></i> Kategori</a>
                </div>

                <table class="table">
                    <thead class="text-center">
                        <th>#</th>
                        <th>ID</th>
                        <th>Judul Buku</th>
                        <th colspan="2">Pilihan</th>
                    </thead>
                    <tfoot class="text-center">
                        <th>#</th>
                        <th>Judul Buku</th>
                        <th colspan="2">Pilihan</th>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($kategori as $k) : ?>
                            <tr>
                                <td class="text-center"><b><?= $i++; ?></b></td>
                                <td><?= $k['nama_kategori']; ?></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-success p-2 mx-auto" type="button" href="#" data-toggle="modal" data-target="#editModal<?= $k['id_kategori']; ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-danger p-2 mx-auto" type="button" href="#" data-toggle="modal" data-target="#hapusModal<?= $k['id_kategori']; ?>"><i class="fa-solid fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            <div class="modal fade" id="editModal<?= $k['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-primary" id="exampleModalLabel">Yakin edit data?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Pilih "Edit" untuk mengedit data <span class="text-primary">kategori <?= $k['nama_kategori']; ?></span> :)</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                                            <a class="btn btn-success" href="<?= base_url('buku/editKategori/' . $k['id_kategori']); ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="hapusModal<?= $k['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Yakin hapus kategori?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Pilih "Hapus" untuk menghapus <span class="text-primary">kategori <?= $k['nama_kategori']; ?></span> :)</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success" type="button" data-dismiss="modal">Batal</button>
                                            <a class="btn btn-danger" href="<?= base_url('buku/hapusKategori/' . $k['id_kategori']); ?>"><i class="fa-solid fa-trash"></i> Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- Modal Tambah Kategori -->
                <div class="modal fade" id="tambahKategoriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-primary" id="exampleModalLabel">Tambah Kategori Baru</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= base_url('buku/tambahKategori'); ?>">
                                    <label>Nama Kategori</label>
                                    <input type="text" class="form-control" id="nama_kategori" placeholder="Masukan Nama Kategori" name="nama_kategori">
                                    <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                                <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>