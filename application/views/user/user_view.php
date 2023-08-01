<?php if (!defined('BASEPATH'))
	exit('No direct script acess allowed'); ?>
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

	<?php if (!empty($this->session->flashdata())) {
		echo $this->session->flashdata('pesan');
	} ?>
	<div class="kt-portlet kt-portlet--mobile">
		<div class="kt-portlet__head kt-portlet__head--lg">
			<div class="kt-portlet__head-label">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-line-chart"></i>
				</span>
				<h3 class="kt-portlet__head-title">
					Data Pengguna
				</h3>
			</div>
			<div class="kt-portlet__head-toolbar">
				<div class="kt-portlet__head-wrapper">
					<div class="kt-portlet__head-actions">


						<a href="user/tambah" class="btn btn-brand btn-elevate btn-icon-sm">
							<i class="la la-plus"></i>
							Tambah User
						</a>


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
						<th>ID</th>
						<th>Foto</th>
						<th>Nama</th>
						<th>User</th>
						<th>Jenkel</th>
						<th>Telepon</th>
						<th>Level</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($user as $isi) { ?>
						<tr>
							<td>
								<?= $no; ?>
							</td>
							<td>
								<?= $isi['anggota_id']; ?>
							</td>
							<td>
								<center>
									<?php if (!empty($isi['foto'] !== "-")) { ?>
										<img src="<?php echo base_url(); ?>assets_style/image/<?php echo $isi['foto']; ?>"
											alt="#" class="img-responsive" style="height:auto;width:100px;" />
									<?php } else { ?>
										<!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
										<i class="fa fa-user fa-3x" style="color:#333;"></i>
									<?php } ?>
								</center>
							</td>
							<td>
								<?= $isi['nama']; ?>
							</td>
							<td>
								<?= $isi['user']; ?>
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
							<td>
								<?= $isi['alamat']; ?>
							</td>
							<td></td>
						</tr>
						<?php $no++;
					} ?>
				</tbody>
			</table>
			<!--end: Datatable -->
		</div>
	</div>




	<script>
		"use strict";
		var KTDatatablesBasicScrollable = function () {

			var initTable1 = function () {
				var table = $('#kt_table_1');

				// begin first table
				table.DataTable({
					scrollY: '50vh',
					scrollX: true,
					scrollCollapse: true,
					columnDefs: [
						{
							targets: -1,
							title: 'Actions',
							orderable: false,
							render: function (data, type, full, meta) {
								return `
						<span class="dropdown">
							<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
							  <i class="la la-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="<?= base_url('user/edit/' . $isi['id_login']); ?>"><i class="la la-edit"></i> Edit</a>
								<a class="dropdown-item" href="<?= base_url('user/del/' . $isi['id_login']); ?>" onclick="return confirm('Anda yakin user akan dihapus ?');"><i class="la la-trash"></i> Hapus</a>
								<a class="dropdown-item" href="<?= base_url('user/detail/' . $isi['id_login']); ?>"><i class="la la-print"></i>Cetak</a>

								
								
							</div>
						</span>
						<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
						  <i class="la la-edit"></i>
						</a>`;
							},
						},
						{
							targets: 8,
							render: function (data, type, full, meta) {
								var status = {
									1: { 'title': 'Pending', 'class': 'kt-badge--brand' },
									2: { 'title': 'Delivered', 'class': ' kt-badge--danger' },
									3: { 'title': 'Canceled', 'class': ' kt-badge--primary' },
									4: { 'title': 'Success', 'class': ' kt-badge--success' },
									5: { 'title': 'Info', 'class': ' kt-badge--info' },
									6: { 'title': 'Danger', 'class': ' kt-badge--danger' },
									7: { 'title': 'Warning', 'class': ' kt-badge--warning' },
								};
								if (typeof status[data] === 'undefined') {
									return data;
								}
								return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
							},
						},
						{
							targets: 9,
							render: function (data, type, full, meta) {
								var status = {
									1: { 'title': 'Online', 'state': 'danger' },
									2: { 'title': 'Retail', 'state': 'primary' },
									3: { 'title': 'Direct', 'state': 'success' },
								};
								if (typeof status[data] === 'undefined') {
									return data;
								}
								return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--dot"></span>&nbsp;' +
									'<span class="kt-font-bold kt-font-' + status[data].state + '">' + status[data].title + '</span>';
							},
						},
					],
				});
			};

			var initTable2 = function () {
				var table = $('#kt_table_2');

				// begin second table
				table.DataTable({
					scrollY: '50vh',
					scrollX: true,
					scrollCollapse: true,
					createdRow: function (row, data, index) {
						var status = {
							1: { 'title': 'Pending', 'class': 'kt-badge--brand' },
							2: { 'title': 'Delivered', 'class': ' kt-badge--danger' },
							3: { 'title': 'Canceled', 'class': ' kt-badge--primary' },
							4: { 'title': 'Success', 'class': ' kt-badge--success' },
							5: { 'title': 'Info', 'class': ' kt-badge--info' },
							6: { 'title': 'Danger', 'class': ' kt-badge--danger' },
							7: { 'title': 'Warning', 'class': ' kt-badge--warning' },
						};
						var badge = '<span class="kt-badge ' + status[data[18]].class + ' kt-badge--inline kt-badge--pill">' + status[data[18]].title + '</span>';
						row.getElementsByTagName('td')[18].innerHTML = badge;

						status = {
							1: { 'title': 'Online', 'state': 'danger' },
							2: { 'title': 'Retail', 'state': 'primary' },
							3: { 'title': 'Direct', 'state': 'success' },
						};
						badge = '<span class="kt-badge kt-badge--' + status[data[19]].state + ' kt-badge--dot"></span>&nbsp;' +
							'<span class="kt-font-bold kt-font-' + status[data[19]].state + '">' + status[data[19]].title + '</span>';
						row.getElementsByTagName('td')[19].innerHTML = badge;
					},
					columnDefs: [
						{
							targets: -1,
							title: 'Actions',
							orderable: false,
							render: function (data, type, full, meta) {
								return `
						<span class="dropdown">
							<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
							  <i class="la la-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
								<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
								<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
							</div>
						</span>
						<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
						  <i class="la la-edit"></i>
						</a>`;
							},
						}],
				});
			};

			return {

				//main function to initiate the module
				init: function () {
					initTable1();
					initTable2();
				},

			};

		}();

		jQuery(document).ready(function () {
			KTDatatablesBasicScrollable.init();
		});
	</script>


</div>