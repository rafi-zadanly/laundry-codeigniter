                <div class="row">
                    <div class="col-6 offset-3 pt-3">
                        <?php if($this->session->flashdata('success_msg') == true): ?>
                        <div class="alert alert-success shadow-sm text-center" role="alert">
                            <?= $this->session->flashdata('success_msg'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('failed_msg') == true): ?>
                        <div class="alert alert-danger shadow-sm text-center" role="alert">
                            <?= $this->session->flashdata('failed_msg'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-2 pl-4 pr-4">
                        <button type="button" class="btn btn-light shadow float-right" data-toggle="modal" data-target="#addModal">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-4 pl-4 pr-4">
                        <div class="card p-3 shadow">
                            <p class="mb-3 chart-title">
                                <i class="fa fa-user-friends mr-1"></i> Data Pengguna
                            </p>
                            <table class="table table-striped table-inverse table-responsive-sm">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Nama Pengguna</th>
                                        <th>Id Outlet</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_pengguna as $pengguna) : ?>
                                    <tr>
                                        <td scope="row"><?= $pengguna->id ?></td>
                                        <td><?= $pengguna->nama ?></td>
                                        <td><?= $pengguna->username ?></td>
                                        <td><?= $pengguna->id_outlet ?></td>
                                        <td><?= $pengguna->status ?></td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                                            </a>
                                            <a href="<?= site_url(); ?>/data_pengguna/hapus/<?= $pengguna->id ?>" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data Pengguna</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?= form_open('data_pengguna/tambah'); ?>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">
                                            <label for="">Nama Lengkap<span class="required-input">*</span></label>
                                            <input type="text" class="form-control form-control-sm" name="nama_lengkap" id="" aria-describedby="helpId" value="<?= set_value('nama_lengkap') ?>">
                                            <small id="helpId" class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Pengguna<span class="required-input">*</span></label>
                                            <input type="text" class="form-control form-control-sm" name="nama_pengguna" id="" aria-describedby="helpId" value="<?= set_value('nama_pengguna'); ?>">
                                            <small id="helpId" class="form-text text-danger"><?= form_error('nama_pengguna'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kata Sandi<span class="required-input">*</span></label>
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-sm pw-input" name="kata_sandi" id="" aria-describedby="helpId" value="<?= set_value('kata_sandi'); ?>" autocomplete="false">
                                                <div class="input-group-text pw-toggle">
                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <small id="helpId" class="form-text text-danger"><?= form_error('kata_sandi'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cabang Toko<span class="required-input">*</span></label>
                                            <select name="cabang_toko" id="" class="form-control form-control-sm">
                                                <option value="NULL">Pilih Cabang</option>
                                                <option value="202101">202001 - Cabang Margonda, Depok</option>
                                                <option value="202102">202002 - Cabang Juanda, Depok</option>
                                                <option value="202103">202003 - Cabang Pekapuran, Depok</option>
                                            </select>
                                            <small id="helpId" class="form-text text-danger"><?= form_error('cabang_toko'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status Pengguna<span class="required-input">*</span></label>
                                            <select name="status_pengguna" id="" class="form-control form-control-sm">
                                                <option value="NULL">Pilih Status</option>
                                                <option value="admin">Admin</option>
                                                <option value="kasir">Kasir</option>
                                            </select>
                                            <small id="helpId" class="form-text text-danger"><?= form_error('status_pengguna'); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->