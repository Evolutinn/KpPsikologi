<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>

<!-- /.box-header -->
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Data Booking Buku
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">




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
                    <th>Durasi Pinjam</th>
                    <th style="width:10%">Status</th>
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

                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $isi['pinjam_id']; ?></td>
                        <td><?= $isi['anggota_id']; ?></td>
                        <td><?= $ang->nama; ?></td>
                        <td><?= $isi['tgl_pinjam']; ?></td>
                        <td><?= $isi['lama_pinjam']. ' hari'; ?></td>
                        <td><?= $isi['status']; ?></td>
                        <td>
                            <?php
                            $date1 = date('y-m-d');
                            $date2 = preg_replace('/[^0-9]/', '', $isi['tgl_pinjam']);
                            $datetime1 = new DateTime($date1);
                            $datetime2 = new DateTime($date2);

                            ?>
                            <span class="dropdown">
                                <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                    <i class="la la-bars"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <?php if ($this->session->userdata('level') == 'Petugas') { ?>
                                        <?php if ($datetime2 >= $datetime1) { ?>
                                            <a class="dropdown-item" href="<?= base_url('transaksi/prosespinjam?pinjam_id=' . $isi['pinjam_id']); ?>" onclick="return confirm('Anda yakin Peminjaman Ini akan dihapus ?');" title="hapus pinjam">
                                                <i class="la la-trash"></i> Hapus Pinjam</a>
                                            <a class="dropdown-item" href="<?= base_url('transaksi/approve/' . $isi['pinjam_id']); ?>" title="pengembalian buku">
                                                <i class="la la-sign-out"></i> Approve</a>
                                        <?php } else { ?>
                                            <?php $interval = $datetime2->diff($datetime1); ?>
                                            <?php if ($interval->days > 0) { ?>
                                                <a class="dropdown-item" href="<?= base_url('transaksi/prosespinjam?pinjam_id=' . $isi['pinjam_id']); ?>" onclick="return confirm('Anda yakin Peminjaman Ini akan dihapus ?');" title="hapus pinjam">
                                                    <i class="la la-trash"></i> Hapus Pinjam</a>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <a class="dropdown-item" href="<?= base_url('transaksi/prosespinjam?pinjam_id=' . $isi['pinjam_id']); ?>" onclick="return confirm('Anda yakin Peminjaman Ini akan dihapus ?');" title="hapus pinjam">
                                            <i class="la la-trash"></i> Hapus Pinjam</a>
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