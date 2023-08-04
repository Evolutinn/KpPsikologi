<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>

<!-- /.box-header -->
<div class="kt-portlet kt-portlet--mobile">
	<div class="kt-portlet__head kt-portlet__head--lg">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
			<h3 class="kt-portlet__head-title">
				Data Pinjam Buku
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">


					<?php if ($this->session->userdata('level') == 'Anggota') { ?>
						<a href="transaksi/pinjam"><button class="btn btn-primary">
								<i class="fa fa-plus"> </i> Tambah Pinjam</button></a><?php } ?>


				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body">

		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
			<thead>
				<tr>
					<th>No</th>
					<th>No Pinjam</th>
					<th>ID Anggota</th>
					<th>Nama</th>
					<th>Pinjam</th>
					<th>Balik</th>
					<th style="width:10%">Status</th>
					<th>Denda</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($pinjam->result_array() as $isi) {
					$anggota_id = $isi['anggota_id'];
					$ang = $this->db->query("SELECT * FROM tbl_login WHERE anggota_id = '$anggota_id'")->row();

					$pinjam_id = $isi['pinjam_id'];
					$denda = $this->db->query("SELECT * FROM tbl_denda WHERE pinjam_id = '$pinjam_id'");
					$total_denda = $denda->row();
				?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $isi['pinjam_id']; ?></td>
						<td><?= $isi['anggota_id']; ?></td>
						<td><?= $ang->nama; ?></td>
						<td><?= $isi['tgl_pinjam']; ?></td>
						<td><?= $isi['tgl_balik']; ?></td>
						<td><?= $isi['status']; ?></td>
						<td>
							<?php
							if ($isi['status'] == 'Di Kembalikan') {
								echo $this->M_Admin->rp($total_denda->denda);
							} else {
								$jml = $this->db->query("SELECT * FROM tbl_pinjam WHERE pinjam_id = '$pinjam_id'")->num_rows();
					$date1 = date('y-m-d');
					$date2 = preg_replace('/[^0-9]/', '', $isi['tgl_balik']);
					$datetime1 = new DateTime($date1);
					$datetime2 = new DateTime($date2);

					// Periksa apakah tanggal pengembalian lebih besar atau sama dengan tanggal sekarang
					if ($datetime2 >= $datetime1) {
						echo '<p style="color:green;">Tidak Ada Denda</p>';
					} else {
						$interval = $datetime2->diff($datetime1);
						if ($interval->days > 0) {
							echo  $interval->days . " hari";
							$dd = $this->M_Admin->get_tableid_edit('tbl_biaya_denda', 'stat', 'Aktif');
							echo '<p style="color:red;font-size:18px;">
                    ' . $this->M_Admin->rp($jml * ($dd->harga_denda * $interval->days)) . ' 
                    </p><small style="color:#333;">* Untuk ' . $jml . ' Buku</small>';
						} else {
							echo '<p style="color:green;text-align:center;">
							Tidak Ada Denda</p>';
						}
					}
				}
							?>
							
						</td>
						<td style="text-align:center;">
							<span class="dropdown">
								<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-bars"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<?php if ($this->session->userdata('level') == 'Petugas') { ?>
										<?php if ($isi['tgl_kembali'] == '0') { ?>
											<a class="dropdown-item" href="<?= base_url('transaksi/kembalipinjam/' . $isi['pinjam_id']); ?>" title="pengembalian buku">
												<i class="la la-sign-out"></i> Kembalikan</a>
										<?php } else { ?>
											<a class="dropdown-item" href="javascript:void(0)" title="pengembalian buku">
												<i class="la la-check"></i> Dikembalikan</a>
										<?php } ?>
										<a class="dropdown-item" href="<?= base_url('transaksi/detailpinjam/' . $isi['pinjam_id'] . '?pinjam=yes'); ?>" title="detail pinjam"><i class="la la-eye"></i>Detail Pinjam</a>
										<a class="dropdown-item" href="<?= base_url('transaksi/prosespinjam?pinjam_id=' . $isi['pinjam_id']); ?>" onclick="return confirm('Anda yakin Peminjaman Ini akan dihapus ?');" title="hapus pinjam">
											<i class="la la-trash"></i>Hapus Pinjam</a>
									<?php } else { ?>
										<a class="dropdown-item" href="<?= base_url('transaksi/detailpinjam/' . $isi['pinjam_id']); ?>" title="detail pinjam">
											<i class="la la-eye"></i> Detail Pinjam</a>
									<?php } ?>


								</div>
							</span>
						</td>
					</tr>
				<?php $no++;
				} ?>
			</tbody>

			<!--end: Datatable -->
	</div>
</div>




<script>
	"use strict";
	var KTDatatablesBasicScrollable = function() {

		var initTable1 = function() {
			var table = $('#kt_table_1');

			// begin first table
			table.DataTable({
				scrollY: '50vh',
				scrollX: true,
				scrollCollapse: true,
			});
		};

		return {

			//main function to initiate the module
			init: function() {
				initTable1();
			},

		};

	}();

	jQuery(document).ready(function() {
		KTDatatablesBasicScrollable.init();
	});
</script>