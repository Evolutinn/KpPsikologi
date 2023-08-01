<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<?php
	$idkat = $buku->id_kategori;
	$idrak = $buku->id_rak;

	$kat = $this->M_Admin->get_tableid_edit('tbl_kategori','id_kategori',$idkat);
	$rak = $this->M_Admin->get_tableid_edit('tbl_rak','id_rak',$idrak);
?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">User</h3>
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


<div class="row">
								<div class="col-xl-12">

									<!--begin:: Widgets/Applications/User/Profile3-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__body">
											<div class="kt-widget kt-widget--user-profile-3">
												<div class="kt-widget__top">
													<div class="kt-widget__media kt-hidden-">
													<?php if(!empty($buku->sampul !== "0")){?>
									<a href="<?= base_url('assets_style/image/buku/'.$buku->sampul);?>" target="_blank">
										<img src="<?= base_url('assets_style/image/buku/'.$buku->sampul);?>" style="width:170px;height:170px;" class="img-responsive">
									</a>
									<?php }else{ echo '<br/><p style="color:red">* Tidak ada Sampul</p>';}?>
													</div>
													<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
														JM
													</div>
													<div class="kt-widget__content">
														<div class="kt-widget__head">
															<a href="#" class="kt-widget__username">
															<?= $buku->title;?>
																
															</a>
															<div class="kt-widget__action">
																<button type="button" class="btn btn-label-success btn-sm btn-upper">Sample Buku</button>&nbsp;
																<button type="button" class="btn btn-brand btn-sm btn-upper">Detail Peminjaman</button>
															</div>
														</div>
														<div class="kt-widget__subhead">
														<a href="#"><i class="flaticon2-correct"></i>ISBN: <?= $buku->isbn;?></a>
														<br>
														<a href="#"><i class="flaticon-paper-plane-1"></i>Penerbit: <?= $buku->penerbit;?></a>
														<br>
														<a href="#"><i class="flaticon-doc"></i>Pengarang: <?= $buku->pengarang;?></a>
														<br>
														<a href="#"><i class="flaticon-calendar-with-a-clock-time-tools"></i>Tahun Terbit: <?= $buku->thn_buku;?></a>
															
														</div>
														<div class="kt-widget__info">
															<div class="kt-widget__desc">
																<?= $buku->isi;?>
															
															</div>

														</div>
													</div>
												</div>
												<div class="kt-widget__bottom">
													<div class="kt-widget__item">
														<div class="kt-widget__icon">
														<i class="flaticon-interface-9"></i>
														</div>
														<div class="kt-widget__details">
															<span class="kt-widget__title">Kategori</span>
															<span class="kt-widget__value"><?= $kat->nama_kategori;?></span>
														</div>
													</div>
													<div class="kt-widget__item">
														<div class="kt-widget__icon">
															<i class="flaticon-folder-1"></i>
														</div>
														<div class="kt-widget__details">
															<span class="kt-widget__title">Rak/Lokasi</span>
															<span class="kt-widget__value"><?= $rak->nama_rak;?></span>
														</div>
													</div>
													<div class="kt-widget__item">
														<div class="kt-widget__icon">
															<i class="flaticon2-crisp-icons-1"></i>
														</div>
														<div class="kt-widget__details">
															<span class="kt-widget__title">Tanggal Masuk</span>
															<span class="kt-widget__value"><?= $buku->tgl_masuk;?></span>
														</div>
													</div>
													<div class="kt-widget__item">
														<div class="kt-widget__icon">
															<i class="flaticon2-open-text-book"></i>
														</div>
														<div class="kt-widget__details">
															<span class="kt-widget__title">Jumlah Buku</span>
															<a href="#" class="kt-widget__value kt-font-brand"><?= $buku->jml;?></a>
														</div>
													</div>
													<div class="kt-widget__item">
														<div class="kt-widget__icon">
															<i class="flaticon-user-add"></i>
														</div>
														<div class="kt-widget__details">
															<span class="kt-widget__title">Jumlah Pinjaman</span>
															<a href="#" class="kt-widget__value kt-font-brand">
																							<?php
																$id = $buku->buku_id;
																$dd = $this->db->query("SELECT * FROM tbl_pinjam WHERE buku_id= '$id' AND status = 'Dipinjam'");
																if($dd->num_rows() > 0 )
																{
																	echo $dd->num_rows();
																}else{
																	echo '0';
																}
															?> </a>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Applications/User/Profile3-->
								</div>
							</div>




</div>