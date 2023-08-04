<?php if (!defined('BASEPATH'))
	exit('No direct script acess allowed'); ?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

	<div class="kt-subheader  kt-grid__item" id="kt_subheader">
		<div class="kt-container  kt-container--fluid ">
			<div class="kt-subheader__main">
				<h3 class="kt-subheader__title">Rak</h3>
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

	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head kt-portlet__head--lg">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="kt-font-brand flaticon2-open-text-book"></i>
					</span>
					<h3 class="kt-portlet__head-title">
						Tabel Rak
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<div class="kt-portlet__head-wrapper">
						<div class="kt-portlet__head-actions">

						<?php if(!empty($this->input->get('id'))){?>
							<a href="" class="btn btn-primary kt-btn kt-btn--pill" data-toggle="modal"
								data-target="#kt_select_modal">Edit Rak</a>
								<?php }else{?>
									<a href = "" class="btn btn-success kt-btn kt-btn--pill" data-toggle="modal"
								data-target="#kt_select_modal">Tambah Rak</a>		
								<?php }?>		
							
							
								

								
						</div>
					</div>
				</div>
			</div>

			<!--begin::Form-->


			<!--end::Form-->
		</div>

		<!--end::Portlet-->

		<!--begin::Modal-->
		<div class="modal fade" id="kt_select_modal" role="dialog" aria-labelledby="" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<?php if(!empty($this->input->get('id'))){?>
							<h5 class="modal-title" id="">Edit Data</h5>	
								<?php }else{?>	
									<h5 class="modal-title" id="">Tambah Data</h5>	
								<?php }?>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="la la-remove"></span>
						</button>
					</div>
					<?php if(!empty($this->input->get('id'))){?>
					<form class="kt-form kt-form--label-right" method="post" action="<?= base_url('data/rakproses');?>">
						<div class="modal-body">
							<div class="form-group row kt-margin-t-20">
								<label class="col-form-label col-lg-3 col-sm-12">Standard Input</label>
								<div class="col-lg-9 col-md-9 col-sm-12">
									<input type="text" class="form-control" type="text" name="rak" value="<?=$rak->nama_rak;?>" id="rak" class="form-control"  placeholder="Contoh : Pemrograman Web" />
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="hidden" name="edit" value="<?=$rak->id_rak;?>">
								<button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Kategori</button>				
						</div>
					</form>
					<?php }else{?>
					<form class="kt-form kt-form--label-right" method="post" action="<?= base_url('data/rakproses');?>">
						<div class="modal-body">
						<div class="form-group row kt-margin-t-20">
								<label class="col-form-label col-lg-3 col-sm-12">Nama Kategori</label>
								<div class="col-lg-9 col-md-9 col-sm-12">
									<input type="text" class="form-control" name="rak" id="rak" class="form-control"  placeholder="Contoh : Rak Buku 1" />
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="hidden" name="tambah" value="tambah">
								<button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Kategori</button>
						</div>
					</form>
					<?php }?>
				</div>
			</div>
		</div>

		<div class="kt-portlet__body">

			<!--begin: Datatable -->
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr>
						<th>No</th>
						<th>Kategori</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;foreach($rakbuku->result_array() as $isi){?>
									
					<?php
						if ($no%2 == 1) {
							echo '<tr class="table-success">';
						} else {
							echo '<tr class="table-brand">';
						}
						?>
										<td><?= $no;?></td>
										<td><?= $isi['nama_rak'];?></td>
										<td style="width:20%;">
											<a href="<?= base_url('data/rak?id='.$isi['id_rak']);?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
											<a href="<?= base_url('data/rakproses?rak_id='.$isi['id_rak']);?>" onclick="return confirm('Anda yakin Rak Buku ini akan dihapus ?');">
											<button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
										</td>
									</tr>
								<?php $no++;}?>
				</tbody>

				<!--end: Datatable -->
		</div>

	</div>

	<!-- end:: Content -->
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