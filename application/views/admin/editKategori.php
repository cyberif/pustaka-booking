<div class="container-fluid">
    <div class="col-lg-7 mx-auto">
        <div class="card shadow bg-gradient-light">
            <h3 class="card-header text-center text-dark font-weight-bold">
                Edit Kategori
            </h3>
            <br>
            <div class="card-body p-4">
                <form action="<?= base_url('buku/editKategori/' . $kategori['id_kategori']); ?>" method="POST">
                    <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori']; ?>">
                    <div class="row">
                        <div class="col">
                            <div class="form-group text-dark">
                                <label>Nama Kategori</label>
                                <input type="text" class="form-control" id="nama_kategori" value="<?= $kategori['nama_kategori']; ?>" name="nama_kategori">
                                <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="form-group">
                                <button class="btn btn-secondary btn-sm p-2" type="reset">RESET</button>
                                <button class="btn btn-primary btn-sm p-2" type="submit">UBAH</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>