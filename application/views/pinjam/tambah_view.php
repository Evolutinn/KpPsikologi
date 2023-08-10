<?php if (!defined('BASEPATH'))
	exit('No direct script acess allowed');
$d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();


?>


<!--begin::Portlet-->
<div class="row">
	<div class="col-lg-6">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon kt-hidden">
						<i class="la la-gear"></i>
					</span>
					<h3 class="kt-portlet__head-title">
						Data Transaksi
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form" action="<?php echo base_url('transaksi/prosespinjam'); ?>" method="POST"
				enctype="multipart/form-data">
				<div class="kt-portlet__body">
					<div class="kt-form__section kt-form__section--first">
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">No Peminjaman:</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="nopinjam" value="<?= $nop; ?>" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Tgl Peminjaman:</label>
							<div class="col-lg-6">
								<input type="date" class="form-control" value="<?= date('Y-m-d'); ?>" name="tgl"
									readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">ID Anggota:</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" name="anggota_id" value="<?= $d->anggota_id; ?>"
									readonly>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Biodata:</label>
							<div class="col-lg-6">
								<div id="result_tunggu">
									<p style="color:red">* Belum Ada Hasil</p>
								</div>
								<div id="result"></div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label">Lama Peminjaman:</label>
							<div class="col-lg-6">
								<input type="number" class="form-control" placeholder="Lama Pinjam Contoh : 2 Hari (2)"
									name="lama" id="lamaInput" required>
								<div id="notification" style="display: none; color: red;">Lama pinjam harus antara 1 dan
									5 hari.</div>

								<!-- script active notif < 1 && > 5 -->
								<script>
									var lamaInput = document.getElementById("lamaInput");
									var notification = document.getElementById("notification");
									var submitButton = document.querySelector("button[type='submit']");

									lamaInput.addEventListener("input", function () {
										var value = parseInt(lamaInput.value);

										if (isNaN(value) || value < 1 || value > 5) {
											notification.style.display = "block";
											submitButton.disabled = true;
										} else {
											notification.style.display = "none";
											submitButton.disabled = false;
										}
									});
								</script>


							</div>
						</div>
					</div>
				</div>


				<!--end::Form-->
		</div>
	</div>
	<div class="col-lg-6">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon kt-hidden">
						<i class="la la-gear"></i>
					</span>
					<h3 class="kt-portlet__head-title">
						Pinjam Buku
					</h3>
				</div>
			</div>
			<!--begin::Form-->

			<div class="kt-portlet__body">

				<div class="form-group row">
					<label>Kode Buku</label>
					<div class="input-group">
						<input type="text" class="form-control" autocomplete="off" name="buku_id" id="buku-search"
							placeholder="Contoh ID Buku : BK001" type="text" value="">
						<div class="input-group-append">
							<button class="btn btn-secondary" type="button" data-toggle="modal"
								data-target="#TableBuku">Go!</button>
						</div>
					</div>

				</div>

			</div>
			<div class="kt-portlet__body">
				<div class="form-group row">
					<label class="col-lg-3 col-form-label">Data Buku: </label>
					<div id="result_tunggu_buku">
						<p style="color:red">* Belum Ada Hasil</p>
					</div>
					<div id="result_buku"></div>
				</div>
			</div>
			<div class="kt-portlet__foot">
				<div class="kt-form__actions">
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6">
							<input type="hidden" name="tambah" value="tambah">
							<button type="submit" class="btn btn-primary btn-md" id="submitButton"
								disabled>Submit</button>

							<a href="<?= base_url('transaksi'); ?>" class="btn btn-danger btn-md">Kembali</a>
							
							<!-- script disable button < 1 && > 5 -->
							<script>
								var lamaInput = document.getElementById("lamaInput");
								var notification = document.getElementById("notification");
								var submitButton = document.getElementById("submitButton");

								lamaInput.addEventListener("input", function () {
									var value = parseInt(lamaInput.value);

									if (isNaN(value) || value < 1 || value > 5) {
										notification.style.display = "block";
										submitButton.disabled = true;
									} else {
										notification.style.display = "none";
										submitButton.disabled = false;
									}
								});
							</script>

						</div>
					</div>
				</div>
			</div>
			</form>

			<!--end::Form-->
		</div>
	</div>
</div>

<!--end::Portlet-->
</div>

<!--modal import -->
<div class="modal fade" id="TableBuku">
	<div class="modal-dialog" style="width:80%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add Buku</h4>
			</div>
			<div id="modal_body" class="modal-body fileSelection1">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>ISBN</th>
							<th>Title</th>
							<th>Penerbit</th>
							<th>Tahun Buku</th>
							<th>Stok Buku</th>
							<th>Tanggal Masuk</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($buku->result_array() as $isi) { ?>
							<tr>
								<td>
									<?= $no; ?>
								</td>
								<td>
									<?= $isi['isbn']; ?>
								</td>
								<td>
									<?= $isi['title']; ?>
								</td>
								<td>
									<?= $isi['penerbit']; ?>
								</td>
								<td>
									<?= $isi['thn_buku']; ?>
								</td>
								<td>
									<?= $isi['jml']; ?>
								</td>
								<td>
									<?= $isi['tgl_masuk']; ?>
								</td>
								<td style="width:17%">
									<button class="btn btn-primary" id="Select_File2" data_id="<?= $isi['buku_id']; ?>">
										<i class="fa fa-check"> </i> Pilih
									</button>
									<a href="<?= base_url('data/bukudetail/' . $isi['id_buku']); ?>" target="_blank">
										<button class="btn btn-success"><i class="fa fa-sign-in"></i> Detail</button></a>
								</td>
							</tr>
							<?php $no++;
						} ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
	$(".fileSelection1 #Select_File2").click(function (e) {
		document.getElementsByName('buku_id')[0].value = $(this).attr("data_id");
		$('#TableBuku').modal('hide');
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('transaksi/buku'); ?>",
			data: 'kode_buku=' + $(this).attr("data_id"),
			beforeSend: function () {
				$("#result_buku").html("");
				$("#result_tunggu_buku").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
			},
			success: function (html) {
				$("#result_buku").load("<?= base_url('transaksi/buku_list'); ?>");
				$("#result_tunggu_buku").html('');
			}
		});
	});
</script>

<script>
	// AJAX call for autocomplete 
	$(document).ready(function () {
		$("#buku-search").keyup(function () {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('transaksi/buku'); ?>",
				data: 'kode_buku=' + $(this).val(),
				beforeSend: function () {
					$("#result_tunggu_buku").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
				},
				success: function (html) {
					$("#result_buku").load("<?= base_url('transaksi/buku_list'); ?>");
					$("#result_tunggu_buku").html('');
				}
			});
		});
	});
</script>
<!--modal import -->
<div class="modal fade" id="TableAnggota">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add Anggota</h4>
			</div>
			<div id="modal_body" class="modal-body fileSelection1">
				<table id="example3" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>ID</th>
							<th>Nama</th>
							<th>Jenkel</th>
							<th>Telepon</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($user as $isi) {
							if ($isi['level'] == 'Anggota') {
								?>
								<tr>
									<td>
										<?= $no; ?>
									</td>
									<td>
										<?= $isi['anggota_id']; ?>
									</td>
									<td>
										<?= $isi['nama']; ?>
									</td>
									<td>
										<?= $isi['jenkel']; ?>
									</td>
									<td>
										<?= $isi['telepon']; ?>
									</td>
									<td>
										<?= $isi['level']; ?>
									</td>
									<td style="width:20%;">
										<button class="btn btn-primary" id="Select_File1" data_id="<?= $isi['anggota_id']; ?>">
											<i class="fa fa-check"> </i> Pilih
										</button>
									</td>
								</tr>
								<?php $no++;
							}
						} ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
	$(".fileSelection1 #Select_File1").click(function (e) {
		document.getElementsByName('anggota_id')[0].value = $(this).attr("data_id");
		$('#TableAnggota').modal('hide');
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('transaksi/result'); ?>",
			data: 'kode_anggota=' + $(this).attr("data_id"),
			beforeSend: function () {
				$("#result").html("");
				$("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
			},
			success: function (html) {
				$("#result").html(html);
				$("#result_tunggu").html('');
			}
		});
	});
</script>

<script>
	// AJAX call for autocomplete 
	$(document).ready(function () {
		$("#search-box").keyup(function () {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('transaksi/result'); ?>",
				data: 'kode_anggota=' + $(this).val(),
				beforeSend: function () {
					$("#result").html("");
					$("#result_tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
				},
				success: function (html) {
					$("#result").html(html);
					$("#result_tunggu").html('');
				}
			});
		});
	});
</script>