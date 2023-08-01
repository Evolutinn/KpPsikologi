<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="#">
            <img alt="Logo" src="assets/media/logos/logo-light.png" />
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left"
            id="kt_aside_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                class="flaticon-more"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->

        <!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
            id="kt_aside">

            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="#">
                        <img alt="Logo" src="<?php echo base_url();?>assets/media/logos/logo-light.png" />
                    </a>
                </div>
                <div class="kt-aside__brand-tools">
                    <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
                                </g>
                            </svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                    <path
                                        d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                                </g>
                            </svg></span>
                    </button>

                    <!--
      <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
      -->
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



            <!-- end:: Aside -->

            <!-- begin:: Aside Menu -->
            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
                    data-ktmenu-dropdown-timeout="500">
                    <ul class="kt-menu__nav ">
                    <?php if($this->session->userdata('level') == 'Petugas'){?>
                        <li class="kt-menu__item <?php if ($this->uri->uri_string()=="dashboard"){ echo 'kt-menu__item--active';} ?>" ariap="tr-haspopuue"><a href="<?php echo base_url('dashboard');?>"
                                class="kt-menu__link "><span class="kt-menu__link-icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <path
                                                d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg></span><span class="kt-menu__link-text">Dashboard</span></a></li>

                        <li class="kt-menu__item <?php if ($this->uri->uri_string()=="user"){ echo 'kt-menu__item--active';} ?>" ariap="tr-haspopuue"><a
                                href="<?php echo base_url('user');?>" class="kt-menu__link "><span
                                    class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <path
                                                d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg></span><span class="kt-menu__link-text">Data Penggua</span></a></li>
                                    <li class="kt-menu__item <?php if ($this->uri->uri_string() == 'data' || $this->uri->uri_string() == 'data/rak' || $this->uri->uri_string() == 'data/kategori') {
                                                            echo 'kt-menu__item--active kt-menu__item--open';
                                                        } ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                    <span class="kt-menu__link-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
                                                <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="kt-menu__link-text">Pustaka</span>
                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="kt-menu__submenu">
                                    <span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item kt-menu__item--parent" aria-haspopup="true">
                                            <span class="kt-menu__link"><span class="kt-menu__link-text">Pages</span></span>
                                        </li>
                                        <li class="kt-menu__item <?php if ($this->uri->uri_string() == 'data') {
                                                                        echo 'kt-menu__item--active';
                                                                    } ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="<?php echo base_url("data"); ?>" class="kt-menu__link kt-menu__toggle">
                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                <span class="kt-menu__link-text">Data Buku</span>
                                            </a>
                                        </li>
                                        <li class="kt-menu__item kt-menu__item--submenu <?php if ($this->uri->uri_string() == 'data/kategori') {
                                                                                            echo 'kt-menu__item--active';
                                                                                        } ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="<?php echo base_url("data/kategori"); ?>" class="kt-menu__link kt-menu__toggle">
                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                <span class="kt-menu__link-text">Kategori</span>
                                            </a>
                                        </li>
                                        <li class="kt-menu__item kt-menu__item--submenu <?php if ($this->uri->uri_string() == 'data/rak') {
                                                                                            echo 'kt-menu__item--active';
                                                                                        } ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="<?php echo base_url("data/rak"); ?>" class="kt-menu__link kt-menu__toggle">
                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                <span class="kt-menu__link-text">Rak</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="kt-menu__item <?php if ($this->uri->uri_string() == 'transaksi' || $this->uri->uri_string() == 'transaksi/kembali') {
                                                            echo 'kt-menu__item--active kt-menu__item--open';
                                                        } ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                    <span class="kt-menu__link-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
                                                <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="kt-menu__link-text">Transaksi</span>
                                    <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="kt-menu__submenu <?php if ($this->uri->uri_string() == 'transaksi' || $this->uri->uri_string() == 'transaksi/kembali') {
                                                                    echo 'kt-menu__submenu--on';
                                                                } ?>">
                                    <span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item kt-menu__item--parent" aria-haspopup="true">
                                            <span class="kt-menu__link"><span class="kt-menu__link-text">Pages</span></span>
                                        </li>
                                        <li class="kt-menu__item <?php if ($this->uri->uri_string() == 'transaksi') {
                                                                                            echo 'kt-menu__item--active';
                                                                                        } ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="<?php echo base_url("transaksi"); ?>" class="kt-menu__link kt-menu__toggle">
                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                <span class="kt-menu__link-text">Peminjaman</span>
                                            </a>
                                        </li>
                                        <li class="kt-menu__item <?php if ($this->uri->uri_string() == 'transaksi/kembali') {
                                                                                            echo 'kt-menu__item--active';
                                                                                        } ?>" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                            <a href="<?php echo base_url("transaksi/kembali"); ?>" class="kt-menu__link kt-menu__toggle">
                                                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                <span class="kt-menu__link-text">Pengembalian</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>

            <!-- end:: Aside Menu -->
        </div>

        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                <!-- begin:: Header Menu -->

                <!-- Uncomment this to display the close button of the panel
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
 -->
                <div class="kt-header-menu-wrapper">

                </div>

                <!-- end:: Header Menu -->

                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">




                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                    <?php
                                    $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
                                    ?>
                                <span class="kt-header__topbar-welcome kt-hidden-mobile">Welcome,</span>
                                <span class="kt-header__topbar-username kt-hidden-mobile"><?php echo $d->nama;?></span>
                                <img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg" />

                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                            </div>
                        </div>
                        <div
                            class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                style="background-image: url('<?php echo base_url();?>assets/media/misc/bg-1.jpg')">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg" />

                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span
                                        class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success"><img src="<?php echo base_url();?>assets_style/image/<?php echo $d->foto;?>" alt="#"></span>
                                </div>
                                <div class="kt-user-card__name">
                                <?php echo $d->nama;?>
                                </div>
                                <div class="kt-user-card__badge">
                                    <span class="btn btn-success btn-sm btn-bold btn-font-md"><?php echo $d->level; ?></span>
                                </div>
                            </div>

                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="<?= base_url('user/edit/'.$idbo);?>"
                                    class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Profil Saya
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Setelan Akun Dan Lainnya
                                        </div>
                                    </div>
                                </a>

                                <a href="<?php echo base_url("transaksi/kembali");?>" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Aktifitas Saya
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Histori Peminjam Dan Pengembalian
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url("data");?>" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-hourglass kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Buku
                                        </div>
                                        <div class="kt-notification__item-time">
                                            List Buku
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url("transaksi");?>" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-cardiogram kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Denda
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Denda Buku <span
                                                class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2
                                                pending</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="kt-notification__custom kt-space-between">
                                    <a href="<?php echo base_url();?>login/logout"
                                        class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                                </div>
                            </div>

                            <!--end: Navigation -->
                        </div>
                    </div>

                    <!--end: User Bar -->
                </div>


                <!-- end:: Header Topbar -->
            </div>


