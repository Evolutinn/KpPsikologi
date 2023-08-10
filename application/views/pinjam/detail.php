<?php if (!defined('BASEPATH'))
	exit('No direct script acess allowed'); ?>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="kt-portlet">
		<div class="kt-portlet__body kt-portlet__body--fit">
			<div class="kt-invoice-1">
				<div class="kt-invoice__head" style="background: linear-gradient(120deg, #2ECC71 55%, #00B16A 55%);
													 background-repeat: no-repeat;">
					<div class="kt-invoice__container">
						<div class="kt-invoice__brand">
							<h1 class="kt-invoice__title">DETAIL PINJAM BUKU</h1>
							<div href="#" class="kt-invoice__logo">
								<a href="#"><img src="<?php echo base_url(); ?>assets/media/bg/logo-uir.png"
										style="width:50px;"></a>
								<span class="kt-invoice__desc">
									<span>Jl. Kaharuddin Nst No.113, Simpang Tiga</span>
									<span>Bukit Raya, Kota Pekanbaru, Riau</span>
								</span>
							</div>
						</div>
						<div class="kt-invoice__items">

							<div class="kt-invoice__item">
								<span class="kt-invoice__subtitle">PERPUS CODECUP</span>
								<span class="kt-invoice__text">
									<Fieldset></Fieldset>Fakultas Psikologi
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-invoice__footer">
					<div class="kt-invoice__container">
						<div class="kt-invoice__bank">
							<div class="kt-invoice__title">Data Transaksi</div>
							<div class="kt-invoice__item">
								<span class="kt-invoice__label">No Peminjaman</span>
								<span class="kt-invoice__value">
									<?= $pinjam->pinjam_id; ?>
								</span></span>
							</div>
							<div class="kt-invoice__item">
								<span class="kt-invoice__label">Tgl Peminjaman:</span>
								<span class="kt-invoice__value">
									<?= $pinjam->tgl_pinjam; ?>
								</span></span>
							</div>
							<div class="kt-invoice__item">
								<span class="kt-invoice__label">Tgl pengembalian</span>
								<span class="kt-invoice__value">
									<?= $pinjam->tgl_balik; ?>
								</span></span>
							</div>
							<div class="kt-invoice__item">
								<span class="kt-invoice__label">ID Anggota</span>
								<span class="kt-invoice__value">
									<?= $pinjam->anggota_id; ?>
								</span></span>
							</div>
						</div>
						<div class="kt-invoice__total">
							<span class="kt-invoice__title">Biodata</span>

							<td>
								<?php
								$user = $this->M_Admin->get_tableid_edit('tbl_login', 'anggota_id', $pinjam->anggota_id);
								error_reporting(0);
								if ($user->nama != null) {
									echo '<table class="table table-striped">
															<tr>
																<td>Nama Anggota</td>
																<td>:</td>
																<td>' . $user->nama . '</td>
															</tr>
															<tr>
																<td>Telepon</td>
																<td>:</td>
																<td>' . $user->telepon . '</td>
															</tr>
															<tr>
																<td>E-mail</td>
																<td>:</td>
																<td>' . $user->email . '</td>
															</tr>
															<tr>
																<td>Alamat</td>
																<td>:</td>
																<td>' . $user->alamat . '</td>
															</tr>
															<tr>
																<td>Level</td>
																<td>:</td>
																<td>' . $user->level . '</td>
															</tr>
														</table>';
								} else {
									echo 'Anggota Tidak Ditemukan !';
								}
								?>
							</td>
						</div>
					</div>
				</div>
				<div class="kt-invoice__footer">
					<div class="kt-invoice__container">
						<div class="kt-invoice__bank">
							<div class="kt-invoice__title">Pinjam Buku</div>
							<div class="kt-invoice__item">
								<span class="kt-invoice__label">Status:</span>
								<span class="kt-invoice__value">
									<?= $pinjam->status; ?>
								</span></span>
							</div>
							<div class="kt-invoice__item">
								<span class="kt-invoice__label">Tgl Kembali:</span>
								<span class="kt-invoice__value">
									<?php
									if ($pinjam->tgl_kembali == '0') {
										echo '<p style="color:red;">belum dikembalikan</p>';
									} else {
										echo $pinjam->tgl_kembali;
									}

									?>
								</span></span>
							</div>
							<div class="kt-invoice__item">
								<span class="kt-invoice__label">Denda:</span>
								<span class="kt-invoice__value">
									<?php
									$pinjam_id = $pinjam->pinjam_id;
									$denda = $this->db->query("SELECT * FROM tbl_denda WHERE pinjam_id = '$pinjam_id'");
									$total_denda = $denda->row();

									if ($pinjam->status == 'Di Kembalikan') {
										echo $this->M_Admin->rp($total_denda->denda);

									} else {
										$jml = $this->db->query("SELECT * FROM tbl_pinjam WHERE pinjam_id = '$pinjam_id'")->num_rows();
										$date1 = date('Ymd');
										$date2 = preg_replace('/[^0-9]/', '', $pinjam->tgl_balik);
										$diff = $date1 - $date2;
										/*	$datetime1 = new DateTime($date1);
																				   $datetime2 = new DateTime($date2);
																				   $difference = $datetime1->diff($datetime2); */
										// echo $difference->days;
										if ($diff > 0) {
											echo $diff . ' hari';
											$dd = $this->M_Admin->get_tableid_edit('tbl_biaya_denda', 'stat', 'Aktif');
											echo '<p style="color:red;font-size:18px;">' . $this->M_Admin->rp($jml * ($dd->harga_denda * $diff)) . ' 
														</p><small style="color:#333;">* Untuk ' . $jml . ' Buku</small>';
										} else {
											echo '<p style="color:green;text-align:center;">
														Tidak Ada Denda</p>';
										}
									}
									?>
								</span></span>
							</div>
							<div class="kt-invoice__item">
								<span class="kt-invoice__label">Kode Buku:</span>
								<span class="kt-invoice__value">
									<?php $pin = $this->M_Admin->get_tableid('tbl_pinjam', 'pinjam_id', $pinjam->pinjam_id);
									$no = 1;
									foreach ($pin as $isi) {
										$buku = $this->M_Admin->get_tableid_edit('tbl_buku', 'buku_id', $isi['buku_id']);
										echo $no . '. ' . $buku->buku_id . '<br/>';
										$no++;
									}

									?>
								</span></span>
							</div>
						</div>
						<div class="kt-invoice__total">
							<span class="kt-invoice__title">Data Buku</span>
							<td>
								<table class="table table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Title</th>
											<th>Penerbit</th>
											<th>Tahun</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($pin as $isi) {
											$buku = $this->M_Admin->get_tableid_edit('tbl_buku', 'buku_id', $isi['buku_id']);
											?>
											<tr>
												<td>
													<?= $no; ?>
												</td>
												<td>
													<?= $buku->title; ?>
												</td>
												<td>
													<?= $buku->penerbit; ?>
												</td>
												<td>
													<?= $buku->thn_buku; ?>
												</td>
											</tr>
											<?php $no++;
										} ?>
									</tbody>
								</table>
							</td>
						</div>
					</div>
				</div>
				<div class="kt-invoice__actions">
					<div class="kt-invoice__container">
						<a href="<?= base_url('transaksi'); ?>">
							<button type="button" class="btn btn-brand btn-bold">Kembali</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>