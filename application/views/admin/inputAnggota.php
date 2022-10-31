<div class="container-fluid">
    <div class="card p-3 col-lg-8 mx-auto text-dark">
        <h3 class="text-center font-weight-bold">
            FORM INPUT ANGGOTA
        </h3>
        <br>
        <form action="<?= base_url('admin/inputAnggota'); ?>" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="text" class="form-control" id="nis" placeholder="Masukan NIS" name="nis">
                        <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control" id="kelas" placeholder="Masukan Kelas" name="kelas">
                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                        <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" rows="2" name="alamat" placeholder="Masukan Alamat"></textarea>
                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <br>
                        <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Pria" checked> Pria
                        <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Wanita"> Wanita
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group col-xs-4">
                        <label>Agama</label>
                        <select class="form-control" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <small class="text-primary">*Submit untuk menyimpan.</small>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <button class="btn btn-secondary btn-sm p-2" type="reset">RESET</button>
                        <button class="btn btn-primary btn-sm p-2" type="submit">SUBMIT</button>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </form>
    </div>
</div>