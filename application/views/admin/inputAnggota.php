<div class="container-fluid">
    <div class="col-lg-7 mx-auto">
        <div class="card shadow bg-gradient-light">
            <h3 class="card-header text-center text-dark font-weight-bold">
                FORM INPUT ANGGOTA
            </h3>
            <br>
            <div class="card-body p-4>
                <form action=" <?= base_url('admin/inputAnggota'); ?>" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group text-dark">
                            <label>Nama Siswa</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group text-dark">
                            <label>NIS</label>
                            <input type="text" class="form-control" id="nis" placeholder="Masukan NIS" name="nis">
                            <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group text-dark">
                            <label>Kelas</label>
                            <input type="text" class="form-control" id="kelas" placeholder="Masukan Kelas" name="kelas">
                            <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group text-dark">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group text-dark">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="2" name="alamat" placeholder="Masukan Alamat"></textarea>
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group text-dark">
                            <label>Jenis Kelamin</label>
                            <br>
                            <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Pria" checked> Pria
                            <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Wanita"> Wanita
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group col-xs-4 text-dark">
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