<div class="container-fluid">
    <div class="card shadow mx-auto mt-3">
        <h3 class="card-header text-primary text-center mb-2 ">
            Data User
        </h3>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row p-2">
                    <div class="col">
                        <h5 class="font-weight-bolder text-primary">
                            <?= "Result : " . $jmlUser; ?>
                        </h5>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <?= form_open('admin/searchUser');  ?>
                        <div class="input-group">
                            <input type="text" class="form-control" name="searchUser" placeholder="Cari keyword...">
                            <span class="input-group-btn">
                                <button class="btn btn-outline-primary " type="submit">Cari</button>
                            </span>
                        </div>
                        <?= form_close();  ?>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Active</th>
                        <th>Tanggal Input</th>
                        <th colspan="2">Pilihan</th>
                    </thead>
                    <tfoot class="text-center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Active</th>
                        <th>Tanggal Input</th>
                        <th colspan="2">Pilihan</th>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($user as $u) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $u['nama']; ?></td>
                                <td><?= $u['email']; ?></td>
                                <td><?= $u['image']; ?></td>
                                <td><?= $u['is_active']; ?></td>
                                <td><?= date('d F Y', $u['tanggal_input']); ?></td>
                                <td>
                                    <button class="btn btn-sm btn-success p-2 mx-auto" type="button" href="#" data-toggle="modal" data-target="#editModal<?= $u['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-danger p-2 mx-auto" type="button" href="#" data-toggle="modal" data-target="#hapusModal<?= $u['id']; ?>"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <div class="modal fade" id="editModal<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-primary" id="exampleModalLabel">Yakin edit data?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">??</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Pilih "Edit" untuk mengedit data <?= $u['nama']; ?> :)</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                                            <a class="btn btn-success" href="#"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="hapusModal<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Yakin hapus data?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">??</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Pilih "Hapus" untuk menghapus data <?= $u['nama']; ?> :)</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success" type="button" data-dismiss="modal">Batal</button>
                                            <a class="btn btn-danger" href="#"><i class="fa-solid fa-trash"></i> Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>