<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<?php 
	$bulan_tes =array(
		'01'=>"Januari",
		'02'=>"Februari",
		'03'=>"Maret",
		'04'=>"April",
		'05'=>"Mei",
		'06'=>"Juni",
		'07'=>"Juli",
		'08'=>"Agustus",
		'09'=>"September",
		'10'=>"Oktober",
		'11'=>"November",
		'12'=>"Desember"
	);
?>
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-arrow-up"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Transaksi Pengembalian
            </h3>
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
                                <th>Kembali</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
						</thead>
						<tbody>
						<?php 
							$no=1;
							foreach($pinjam->result_array() as $isi){
                                $anggota_id = $isi['anggota_id'];
                                $ang = $this->db->query("SELECT * FROM tbl_login WHERE anggota_id = '$anggota_id'")->row();

                                $pinjam_id = $isi['pinjam_id'];
                                $denda = $this->db->query("SELECT * FROM tbl_denda WHERE pinjam_id = '$pinjam_id'");
                                $total_denda = $denda->row();
						?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['pinjam_id'];?></td>
                                <td><?= $isi['anggota_id'];?></td>
                                <td><?= $ang->nama;?></td>
                                <td><?= $isi['tgl_pinjam'];?></td>
                                <td><?= $isi['tgl_balik'];?></td>
                                <td><?= $isi['status'];?></td>
								<td>
									<?php 
										if($isi['tgl_kembali'] == '0')
										{
											echo '<p style="color:red;">belum dikembalikan</p>';
										}else{
											echo $isi['tgl_kembali'];
										}
									
									?>
								</td>
                                <td>
									<?php 
										$jml = $this->db->query("SELECT * FROM tbl_pinjam WHERE pinjam_id = '$pinjam_id'")->num_rows();			
										if($denda->num_rows() > 0){
											$s = $denda->row();
											echo $this->M_Admin->rp($s->denda);
										}else{
											$date1 = date('Ymd');
											$date2 = preg_replace('/[^0-9]/','',$isi['tgl_balik']);
											$diff = $date2 - $date1;

											if($diff >= 0 )
											{
												echo '<p style="color:green;">
												Tidak Ada Denda</p>';
											}else{
												$dd = $this->M_Admin->get_tableid_edit('tbl_biaya_denda','stat','Aktif'); 
												echo '<p style="color:red;font-size:18px;">'.$this->M_Admin->rp($jml*($dd->harga_denda*abs($diff))).' 
												</p><small style="color:#333;">* Untuk '.$jml.' Buku</small>';
											}
										}
									?>
								</td>
                                <td>
								<span class="dropdown">
								<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
									<i class="la la-bars"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
                                    <?php if($this->session->userdata('level') == 'Petugas'){ ?>
                                        <a href="<?= base_url('transaksi/detailpinjam/'.$isi['pinjam_id']);?>" 
										class="dropdown-item" title="detail pinjam">
                                            <i class="la la-eye"></i></button>Detail Pinjam</a>

                                        <a href="<?= base_url('transaksi/prosespinjam?pinjam_id='.$isi['pinjam_id']);?>" 
                                            onclick="return confirm('Anda yakin Peminjaman Ini akan dihapus ?');" 
                                            class="dropdown-item" title="hapus pinjam">
                                            <i class="la la-trash"></i>Hapus Pinjam</a>
                                    <?php }else{?>
                                        <a href="<?= base_url('transaksi/detailpinjam/'.$isi['pinjam_id']);?>" 
										class="dropdown-item" title="detail pinjam">
                                            <i class="la la-eye"></i> Detail Pinjam</a>
                                    <?php }?>
									</div>
								</span>
                                </td>
                            </tr>
                        <?php $no++;}?>
                        </tbody>

            <!--end: Datatable -->
    </div>
</div>

<!-- Tambahkan kode ini di bawah kode JavaScript sebelumnya -->

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
			},

		};

	}();
	jQuery(document).ready(function () {
		KTDatatablesBasicScrollable.init();
	});
</script>