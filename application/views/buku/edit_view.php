<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-subheader kt-grid__item" id="kt_subheader">
        <div class="kt-container kt-container--fluid">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Edit Buku</h3>
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
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Form Edit
                            </h3>
                        </div>
                    </div>


                    <!--begin::Form-->
                    <form class="kt-form kt-form--fit kt-form--label-right"
                    action="<?php echo base_url('data/prosesbuku');?>" method="POST" enctype="multipart/form-data">
                        <div class="kt-portlet__body">

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Kategori:</label>
                            <div class="col-lg-3">
                                <select class="form-control" id="exampleSelect1" name="kategori" required>
                                    <option disabled selected value>Pilih Kategori</option>
                                    <?php foreach($kats as $isi){?>
											<option value="<?= $isi['id_kategori'];?>" <?php if($isi['id_kategori'] == $buku->id_kategori){ echo 'selected';}?>><?= $isi['nama_kategori'];?></option>
										<?php }?>
                                        </select>
                            </div>
                                     <label class="col-lg-2 col-form-label">Rak/Lokasi:</label>
                                     <div class="col-lg-3">
                                        <select class="form-control" id="exampleSelect1"name="rak" required>
                                            <option disabled selected value>Pilih Rak / Lokasi</option>
                                            <?php foreach($rakbuku as $isi){?>
											<option value="<?= $isi['id_rak'];?>" <?php if($isi['id_rak'] == $buku->id_rak){ echo 'selected';}?>><?= $isi['nama_rak'];?></option>
										<?php }?>
                                            </select>
                                        </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">ISBN:</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                    <input class="form-control" type="text" id="example-text-input" name="isbn" value="<?= $buku->isbn;?>">

                                </div>
                                <span class="form-text text-muted">Contoh ISBN : 978-602-8123-35-8</span>
                            </div>
                            <label class="col-lg-2 col-form-label">Judul Buku:</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                    <input class="form-control" type="text" id="example-text-input" name="title" value="<?= $buku->title;?>">

                                </div>
                                <span class="form-text text-muted">Contoh : Cara Cepat Belajar Pemrograman Web</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nama Pengarang:</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                    <input class="form-control" type="text" id="example-text-input" name="pengarang" value="<?= $buku->pengarang;?>">

                                </div>
                                <span class="form-text text-muted">Contoh : Tere Liye</span>
                            </div>
                            <label class="col-lg-2 col-form-label">Penerbit:</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                    <input class="form-control" type="text" id="example-text-input" name="penerbit" value="<?= $buku->penerbit;?>">

                                </div>
                                <span class="form-text text-muted">Contoh : Erlangga</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Tahun Buku:</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                    <input class="form-control" type="number" id="example-text-input" name="thn" value="<?= $buku->thn_buku;?>">

                                </div>
                                <span class="form-text text-muted">Contoh : 2019</span>
                            </div>
                            <label class="col-lg-2 col-form-label">Jumlah Buku:</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                    <input class="form-control" type="number" id="example-text-input" name="jml" value="<?= $buku->jml;?>">

                                </div>
                                <span class="form-text text-muted">Contoh : 10</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Sampul (Gambar):</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                    <input type="file" accept="image/*" name="gambar">
                                    <?php if(!empty($buku->sampul !== "0")){?>
									<br/>
									<a href="<?= base_url('assets_style/image/buku/'.$buku->sampul);?>" target="_blank">
										<img src="<?= base_url('assets_style/image/buku/'.$buku->sampul);?>" style="width:70px;height:70px;" class="img-responsive">
									</a>
									<?php }else{ echo '<br/><p style="color:red">* Tidak ada Sampul</p>';}?>
                                </div>
                                <span class="form-text text-muted">Opsional</span>
                            </div>
                            <label class="col-lg-2 col-form-label">Lampiran Buku (pdf):</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                    <input type="file" accept="image/*" name="lampiran">
                                    <?php if(!empty($buku->lampiran !== "0")){?>
									<a href="<?= base_url('assets_style/image/buku/'.$buku->lampiran);?>" class="btn btn-primary btn-md" target="_blank">
										<i class="fa fa-download"></i> Sample Buku
									</a>
									<?php  }else{ echo '<br/><p style="color:red">* Tidak ada Lampiran</p>';}?>
                                </div>
                                <span class="form-text text-muted">Opsional</span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Keterangan Lainnya:</label>
                            <div class="col-lg-3">
                                <div class="kt-input-icon">
                                <textarea class="form-control" name="ket" id="summernotehal" style="height:120px"><?= $buku->isi;?></textarea>

                                </div>
                                <span class="form-text text-muted">Opsional</span>
                            </div>
                        </div>


                        
						
							
                            
                      

                </div>
                <div class="kt-portlet__foot kt-portlet__foot--fit-x">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                            <input type="hidden" name="gmbr" value="<?= $buku->sampul;?>">
							<input type="hidden" name="lamp" value="<?= $buku->lampiran;?>">
							<input type="hidden" name="edit" value="<?= $buku->id_buku;?>">
                            <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                                <a href="<?= base_url('data'); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!--end::Form-->
            </div>

            <!--end::Portlet-->
        </div>
    </div>
</div>
</div>

