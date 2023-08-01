<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container kt-container--fluid">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Update User</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc"><?= $user->nama; ?></span>
                <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                    <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">Edit Profil</h3>
                </div>
            </div>

            <!-- Begin Form -->
            <form class="kt-form" action="<?php echo base_url('user/upd'); ?>" enctype="multipart/form-data" method="post">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Nama</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="<?= $user->nama; ?>" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Tempat Lahir</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="<?= $user->tempat_lahir; ?>" name="lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="<?= $user->tgl_lahir; ?>" name="tgl_lahir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">User Login</label>
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2" value="<?= $user->user; ?>" name="user" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Sandi</label>
                        <div class="col-10">
                            <input class="form-control" type="password" placeholder="Isi Password Jika di Perlukan Ganti" id="example-password-input" name="pass">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Level</label>
                        <div class="col-10">
                            <select class="form-control" name="level" required>
                                <?php if ($this->session->userdata('level') === 'Petugas'): ?>
                                    <option <?= $user->level === 'Petugas' ? 'selected' : ''; ?>>Petugas</option>
                                    <option <?= $user->level === 'Anggota' ? 'selected' : ''; ?>>Anggota</option>
                                <?php elseif ($this->session->userdata('level') === 'Anggota'): ?>
                                    <option <?= $user->level === 'Anggota' ? 'selected' : ''; ?>>Anggota</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Kelamin</label>
                        <div class="col-10">
                            <label class="kt-radio">
                                <input type="radio" name="jenkel" <?= $user->jenkel === 'Laki-Laki' ? 'checked' : ''; ?> value="Laki-Laki" required> Laki-Laki
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="jenkel" <?= $user->jenkel === 'Perempuan' ? 'checked' : ''; ?> value="Perempuan" required> Perempuan
                                <span></span>
                            </label>
                            <span class="form-text text-muted">Masukkan Jenis Kelamin</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">No. Hp</label>
                        <div class="col-10">
                            <input class="form-control" value="<?= $user->telepon; ?>" name="telepon" required placeholder="Contoh : 089618173609">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" value="<?= $user->email; ?>" name="email" required readonly placeholder="Contoh : fauzan1892@codekop.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Foto</label>
                        <span class="kt-media kt-media--xl kt-margin-r- kt-margin-t-5">
                            <img src="<?= base_url('assets_style/image/' . $user->foto); ?>" alt="image">
                        </span>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Ganti Foto</label>
                        <div class="col-10">
                            <input type="file" accept="image/*" name="gambar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Alamat</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <textarea class="form-control" name="alamat" required><?= $user->alamat; ?></textarea>
                            <input type="hidden" class="form-control" value="<?= $user->id_login; ?>"
                                            name="id_login">
                                        <input type="hidden" class="form-control" value="<?= $user->foto; ?>"
                                            name="foto">
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-primary btn-md">Edit Data</button>
                                <?php if ($this->session->userdata('level') === 'Petugas'): ?>
                                    <a href="<?= base_url('user'); ?>" class="btn btn-danger btn-md">Kembali</a>
                                <?php elseif ($this->session->userdata('level') === 'Anggota'): ?>
                                    <a href="<?= base_url('transaksi'); ?>" class="btn btn-danger btn-md">Kembali</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- End Form -->

        </div>
    </div>
</div>
