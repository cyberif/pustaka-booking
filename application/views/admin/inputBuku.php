<div class="container-fluid">
    <div class="col-lg-7 mx-auto">
        <div class="card shadow bg-gradient-light">
            <h3 class="card-header text-center text-dark font-weight-bold">
                FORM INPUT BUKU
            </h3>
            <br>
            <div class="card-body p-4">
                <form action="<?= base_url('buku/inputBuku'); ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group text-dark">
                                <label>Judul Buku</label>
                                <input type="text" class="form-control" id="judul_buku" placeholder="Masukan judul buku" name="judul_buku">
                                <?= form_error('judul_buku', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group col-xs-4 text-dark">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option disabled>-- Pilih --</option>
                                    <?php
                                    foreach ($kategori as $k) : ?>
                                        <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group text-dark">
                                <label>Pengarang</label>
                                <input type="text" class="form-control" id="pengarang" placeholder="Masukan pengarang" name="pengarang">
                                <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group text-dark">
                                <label>Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" placeholder="Masukan penerbit" name="penerbit">
                                <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group text-dark">
                                <label>Tahun Terbit</label>
                                <input type="text" class="form-control" id="tahun_terbit" placeholder="Masukan tahun terbit" name="tahun_terbit">
                                <?= form_error('tahun_terbit', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group text-dark">
                                <label>ISBN</label>
                                <input type="text" class="form-control" id="isbn" placeholder="Masukan ISBN" name="isbn">
                                <?= form_error('isbn', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group text-dark">
                                <label>Stok</label>
                                <input type="text" class="form-control" id="stok" placeholder="Masukan stok" name="stok">
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group text-dark">
                                <label>Image</label>
                                <input type="text" class="form-control" id="image" placeholder="Masukan image" name="image">
                                <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <small class="text-primary">*Submit untuk menyimpan.</small>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <div class="form-group">
                                <button class="btn btn-secondary btn-sm p-2" type="reset">RESET</button>
                                <button class="btn btn-primary btn-sm p-2" type="submit">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>