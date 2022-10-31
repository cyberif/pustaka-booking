<div class="container-fluid">
    <div class="col mx-auto mt-3">
        <h3 class="text-center mb-2 ">
            Data Anggota
        </h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center">
                    <th>No.</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th colspan="2">Pilihan</th>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($anggota as $a) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nis']; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['kelas']; ?></td>
                            <td><?= $a['tgl_lahir']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td><?= $a['jenis_kelamin']; ?></td>
                            <td><?= $a['agama']; ?></td>
                            <td>
                                <button class="btn btn-sm btn-success p-2" type="button" href="#" data-toggle="modal" data-target="#editModal"><i class="fa-solid fa-pen-to-square"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger p-2" type="button" href="#" data-toggle="modal" data-target="#hapusModal"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
            <div class="modal-body">Pilih "Ya" untuk mengedit data :)</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-success" href="#">Ya</a>
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
            <div class="modal-body">Pilih "Ya" untuk menghapus data :)</div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i> Ya</a>
            </div>
        </div>
    </div>
</div>