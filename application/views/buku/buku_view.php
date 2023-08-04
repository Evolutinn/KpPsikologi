<?php if (!defined('BASEPATH'))
    exit('No direct script acess allowed'); ?>

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-file"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Details Buku
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">

                    <?php if ($this->session->userdata('level') == 'Petugas') { ?>
                        <a href="data/bukutambah" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            Tambah Buku
                        </a>
                    <?php } ?>



                </div>
            </div>
        </div>
    </div>

    <?php if (!empty($this->session->flashdata())) {
        echo $this->session->flashdata('pesan');
    } ?>
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Sampul</th>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Penerbit</th>
                    <th>Tahun Buku</th>
                    <th>Stok Buku</th>
                    <th>Dipinjam</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($buku->result_array() as $isi) { ?>

                    <?php
                    if ($no % 2 == 1) {
                        echo '<tr class="table-success">';
                    } else {
                        echo '<tr class="table-brand">';
                    }
                    ?>

                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <center>
                            <?php if (!empty($isi['sampul']) && $isi['sampul'] !== "0") { ?>
                                <img src="<?php echo base_url(); ?>assets_style/image/buku/<?php echo $isi['sampul']; ?>"
                                    alt="#" class="img-responsive" style="height:auto;width:100px;" />
                            <?php } else { ?>
                                <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
                                <i class="fa fa-book fa-3x" style="color:#333;"></i>
                            <?php } ?>
                        </center>
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
                        <?php
                        $id = $isi['buku_id'];
                        $dd = $this->db->query("SELECT * FROM tbl_pinjam WHERE buku_id= '$id' AND status = 'Dipinjam'");
                        if ($dd->num_rows() > 0) {
                            echo $dd->num_rows();
                        } else {
                            echo '0';
                        }
                        ?>
                    </td>
                    <td>
                        <?= $isi['tgl_masuk']; ?>
                    </td>
                    <td>
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
    var KTDatatablesBasicScrollable = function () {

        var initTable1 = function () {
            var table = $('#kt_table_1');

            // begin first table
            table.DataTable({
                scrollY: '50vh',
                scrollX: true,
                scrollCollapse: true,
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    render: function () {
                        return `
                        <span class="dropdown">
                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                              <i class="la la-bars"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            
                            <?php if ($this->session->userdata('level') == 'Petugas') { ?>
                                
                                <a class="dropdown-item" href="<?= base_url('data/bukuedit/' . $isi['id_buku']); ?>"><i class="la la-edit"></i>Edit</a>
                                <a class="dropdown-item" href="<?= base_url('data/bukudetail/' . $isi['id_buku']); ?>">
                                <i class="la la-sign-in"></i>Detail</a>
                                <a class="dropdown-item" href="<?= base_url('data/prosesbuku?buku_id=' . $isi['id_buku']); ?>" onclick="return confirm('Anda yakin Buku ini akan dihapus ?');">
                                <i class="la la-trash"></i>Hapus</a>
                            <?php } else { ?>
                                <a class="dropdown-item" href="<?= base_url('data/bukudetail/' . $isi['id_buku']); ?>">
                                <i class="fa fa-sign-in"></i> Detail</a>
                            <?php } ?>

                                
                                
                            </div>
                        </span>
                        `;
                    },
                },
                {
                    targets: 8,
                    render: function (data, type, full, meta) {
                        var status = {
                            1: {
                                'title': 'Pending',
                                'class': 'kt-badge--brand'
                            },
                            2: {
                                'title': 'Delivered',
                                'class': ' kt-badge--danger'
                            },
                            3: {
                                'title': 'Canceled',
                                'class': ' kt-badge--primary'
                            },
                            4: {
                                'title': 'Success',
                                'class': ' kt-badge--success'
                            },
                            5: {
                                'title': 'Info',
                                'class': ' kt-badge--info'
                            },
                            6: {
                                'title': 'Danger',
                                'class': ' kt-badge--danger'
                            },
                            7: {
                                'title': 'Warning',
                                'class': ' kt-badge--warning'
                            },
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
                            1: {
                                'title': 'Online',
                                'state': 'danger'
                            },
                            2: {
                                'title': 'Retail',
                                'state': 'primary'
                            },
                            3: {
                                'title': 'Direct',
                                'state': 'success'
                            },
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
                        1: {
                            'title': 'Pending',
                            'class': 'kt-badge--brand'
                        },
                        2: {
                            'title': 'Delivered',
                            'class': ' kt-badge--danger'
                        },
                        3: {
                            'title': 'Canceled',
                            'class': ' kt-badge--primary'
                        },
                        4: {
                            'title': 'Success',
                            'class': ' kt-badge--success'
                        },
                        5: {
                            'title': 'Info',
                            'class': ' kt-badge--info'
                        },
                        6: {
                            'title': 'Danger',
                            'class': ' kt-badge--danger'
                        },
                        7: {
                            'title': 'Warning',
                            'class': ' kt-badge--warning'
                        },
                    };
                    var badge = '<span class="kt-badge ' + status[data[18]].class + ' kt-badge--inline kt-badge--pill">' + status[data[18]].title + '</span>';
                    row.getElementsByTagName('td')[18].innerHTML = badge;

                    status = {
                        1: {
                            'title': 'Online',
                            'state': 'danger'
                        },
                        2: {
                            'title': 'Retail',
                            'state': 'primary'
                        },
                        3: {
                            'title': 'Direct',
                            'state': 'success'
                        },
                    };
                    badge = '<span class="kt-badge kt-badge--' + status[data[19]].state + ' kt-badge--dot"></span>&nbsp;' +
                        '<span class="kt-font-bold kt-font-' + status[data[19]].state + '">' + status[data[19]].title + '</span>';
                    row.getElementsByTagName('td')[19].innerHTML = badge;
                },
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