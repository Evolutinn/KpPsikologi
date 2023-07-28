<?php if (!defined('BASEPATH'))
    exit('No direct script acess allowed'); ?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

 <!-- begin:: Content Head -->
 <div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Udate User</h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
        <span class="kt-subheader__desc"><?= $user->nama;?></span>
        <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
          <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
          <span class="kt-input-icon__icon kt-input-icon__icon--right">
            <span><i class="flaticon2-search-1"></i></span>
          </span>
        </div>
      </div>
    </div>
  </div>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Edit Profil
                </h3>
            </div>
        </div>
        <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
    
        <!--begin::Form-->
        <form class="kt-form" action="<?php echo base_url('user/upd');?>" enctype="multipart/form-data">
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nama</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="<?= $user->nama;?>" id="example-text-input" name="nama" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Tempat Lahir</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="<?= $user->tempat_lahir;?>" id="example-text-input" name="lahir" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-10">
                        <input class="form-control" type="date" value="<?= $user->tgl_lahir;?>" id="example-date-input" name="tgl_lahir" required="required">
                    </div>
                </div>
                <div class="form-group row">
					<label for="example-date-input" class="col-2 col-form-label">User Login</label>
													<div class="col-10">
														<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2" value="<?= $user->user;?>" name="user" required="required">
													</div>
												</div>
                <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Pass</label>
                    <div class="col-10">
                        <input class="form-control" type="password" placeholder="Isi Password Jika di Perlukan Ganti"" id="example-password-input" name="pass">
                    </div>
                </div>
                <div class="form-group row">
					<label for="example-password-input" class="col-2 col-form-label">Level</label>
                    <div class="col-10">								
													<select class="form-control" name="level" required="required">
                                                    <?php if($this->session->userdata('level') == 'Petugas'){?>
										<option <?php if($user->level == 'Petugas'){ echo 'selected';}?>>Petugas</option>
										<option <?php if($user->level == 'Anggota'){ echo 'selected';}?>>Anggota</option>
									<?php }elseif($this->session->userdata('level') == 'Anggota'){?>
										<option <?php if($user->level == 'Anggota'){ echo 'selected';}?>>Anggota</option>
									<?php }?>
													</select>
												</div>
												</div>



                                                <div class="form-group row">
													<label for="example-password-input" class="col-2 col-form-label">Kelamin</label>
													<div div class="col-10">
														<label class="kt-radio">
															<input type="radio" name="jenkel" <?php if($user->jenkel == 'Laki-Laki'){ echo 'checked';}?> value="Laki-Laki" required="required"> Laki-Laki
															<span></span>
														</label>    
														<label class="kt-radio">
															<input type="radio" name="jenkel" <?php if($user->jenkel == 'Perempuan'){ echo 'checked';}?> value="Perempuan" required="required"> Perempuan
															<span></span>
														</label>
                                                        <span class="form-text text-muted">Masukkan Jenis Kelamin</span>
													</div>
													
												</div>



                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">No. Hp</label>
                    <div class="col-10">
                        <input class="form-control" value="<?= $user->telepon;?>" name="telepon" required="required" placeholder="Contoh : 089618173609">
                </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input class="form-control" type="email"  value="<?= $user->email;?>" name="email" required="required" placeholder="Contoh : fauzan1892@codekop.com" readonly>
                    </div>
                </div>
                <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Foto</label>				
													<span class="kt-media kt-media--xl  kt-margin-r- kt-margin-t-5">
														<img src="<?= base_url('assets_style/image/'.$user->foto);?>" alt="image">
													</span>
                                                    
                </div>
                <div class="form-group row">
                <label for="example-email-input" class="col-2 col-form-label">Ganti Foto</label>
                                    <input type="file" accept="image/*" name="gambar">            			
													
                                                    
                </div>
													
		

                <div class="form-group row">
											<label for="example-email-input" class="col-2 col-form-label">Alamat</label>
											<div class="col-lg-4 col-md-9 col-sm-12">
												<textarea class="form-control" name="alamat"  required="required"><?= $user->alamat;?></textarea>
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
                            <?php if($this->session->userdata('level') == 'Petugas'){?>
							<a href="<?= base_url('user');?>" class="btn btn-danger btn-md">Kembali</a>
						<?php }elseif($this->session->userdata('level') == 'Anggota'){?>
							<a href="<?= base_url('transaksi');?>" class="btn btn-danger btn-md">Kembali</a>
						<?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

                        </div>
</div>