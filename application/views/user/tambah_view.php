<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container kt-container--fluid">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Tambah User</h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
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
            <form class="kt-form" action="<?php echo base_url('user/add'); ?>" enctype="multipart/form-data" method="post">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Nama</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="nama" placeholder="Nama Pengguna" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Tempat Lahir</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="lahir" placeholder="Contoh : Bekasi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-10">
                            <input class="form-control" type="date" name="tgl_lahir" placeholder="Contoh : 1999-05-18" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">User Login</label>
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2" name="user" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Sandi</label>
                        <div class="col-10">
                            <input class="form-control" type="password" name="pass" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Level</label>
                        <div class="col-10">
                            <select class="form-control" name="level" required>
                                
                                    <option>Petugas</option>
                                    <option>Anggota</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Kelamin</label>
                        <div class="col-10">
                            <label class="kt-radio" required>
                                <input type="radio" name="jenkel" value="Laki-Laki" required> Laki-Laki
                                <span></span>
                            </label>
                            <label class="kt-radio">
                                <input type="radio" name="jenkel" value="Perempuan" required> Perempuan
                                <span></span>
                            </label>
                            <span class="form-text text-muted">Masukkan Jenis Kelamin</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">No. Hp</label>
                        <div class="col-10">
                            <input class="form-control" name="telepon" placeholder="Contoh : 089618173609" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" name="email" placeholder="Contoh : fauzan1892@codekop.com"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Masukkan Foto</label>
                        <div class="col-10">
                            <input type="file" accept="image/*" name="gambar" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 col-form-label">Alamat</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <textarea class="form-control" name="alamat" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                            <button type="submit" class="btn btn-primary btn-md">Tambah Data</button> 
                              
                            <a href="<?= base_url('user');?>" class="btn btn-danger btn-md">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- End Form -->

        </div>
    </div>
</div>
