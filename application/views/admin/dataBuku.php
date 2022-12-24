<div class="container-fluid">
    <div class="card shadow mx-auto mt-3">
        <h3 class="card-header text-primary text-center mb-2 ">
            Data Buku
        </h3>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row p-2">
                    <div class="col">
                        <h5 class="font-weight-bolder text-primary">
                            <?= "Result : " . $jmlBuku; ?>
                        </h5>
                    </div>
                    <div class="col-lg-4 ml-auto">
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

                <table class="table table-bordered">
                    <thead class="text-center">
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Kategori Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>ISBN</th>
                        <th>Gambar</th>
                        <th colspan="2">Pilihan</th>
                    </thead>
                    <tfoot class="text-center">
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Kategori Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>ISBN</th>
                        <th>Gambar</th>
                        <th colspan="2">Pilihan</th>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($buku as $b) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $b['judul_buku']; ?></td>
                                <td><?= $b['id_kategori']; ?></td>
                                <td><?= $b['pengarang']; ?></td>
                                <td><?= $b['penerbit']; ?></td>
                                <td><?= $b['tahun_terbit']; ?></td>
                                <td><?= $b['isbn']; ?></td>
                                <td>
                                    <img src="<?= base_url('assets/img/upload/' .  $b['image']); ?>" alt="<?= $b['image']; ?>" srcset="" width="100">
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-success p-2 mx-auto" type="button" href="#" data-toggle="modal" data-target="#editModal"><i class="fa-solid fa-pen-to-square"></i></button>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-danger p-2 mx-auto" type="button" href="#" data-toggle="modal" data-target="#hapusModal"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Yakin edit data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Edit" untuk mengedit data :)</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-success" href="#"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Yakin hapus data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Hapus" untuk menghapus data :)</div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i> Hapus</a>
            </div>
        </div>
    </div>
</div>