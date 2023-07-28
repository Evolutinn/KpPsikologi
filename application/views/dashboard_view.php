<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if($this->session->userdata('level') == 'Anggota'){ redirect(base_url('transaksi'));}?>

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

  <!-- begin:: Content Head -->
  <div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
      <div class="kt-subheader__main">
        <h3 class="kt-subheader__title">Dashboard</h3>
        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
        <span class="kt-subheader__desc">Control Panel</span>
        <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
          <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
          <span class="kt-input-icon__icon kt-input-icon__icon--right">
            <span><i class="flaticon2-search-1"></i></span>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- end:: Content Head -->

  <!-- begin:: Content -->
  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--Begin::Dashboard 1-->

    <!--Begin::Row-->
    <div class="row">
      <div class="col-lg-6 col-xl-8 order-lg-1 order-xl-1">

        <!--begin:: Widgets/Activity-->
        <div
          class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
          <div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
                Informasi Lanjut
              </h3>
            </div>
          </div>
          <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-widget17">
              <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides"
                style="background-color: #fd397a">
                <div class="kt-widget17__chart" style="height:300px;">
                  <canvas id="kt_chart_activities"></canvas>
                </div>
              </div>
              <div class="kt-widget17__stats">
                <div class="kt-widget17__items">
                  <div class="kt-widget17__item">
                    <span class="kt-widget17__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path
                            d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z"
                            fill="#000000" />
                        </g>
                      </svg> </span>
                    <span class="kt-widget17__subtitle">
                      <a href="user">Anggota</a>
                    </span>
                    <span class="kt-widget17__desc">
                    <?= $count_pengguna;?> Anggota
                    </span>
                  </div>
                  <div class="kt-widget17__item">
                    <span class="kt-widget17__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path
                            d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z"
                            fill="#000000" />
                          <path
                            d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z"
                            fill="#000000" opacity="0.3" />
                        </g>
                      </svg> </span>
                    <span class="kt-widget17__subtitle">
                      <a href="data">Jenis Buku</a>
                    </span>
                    <span class="kt-widget17__desc">
                    <?= $count_buku;?> Buku
                    </span>
                  </div>
                </div>
                <div class="kt-widget17__items">
                  <div class="kt-widget17__item">
                    <span class="kt-widget17__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path
                            d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          <path
                            d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                            fill="#000000" fill-rule="nonzero" />
                        </g>
                      </svg> </span>
                    <span class="kt-widget17__subtitle">
                      <a href="transaksi">Pinjam</a>
                    </span>
                    <span class="kt-widget17__desc">
                    <?= $count_pinjam;?> Peminjaman
                    </span>
                  </div>
                  <div class="kt-widget17__item">
                    <span class="kt-widget17__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path
                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          <rect fill="#000000" x="9" y="12" width="6" height="2" rx="1" />
                        </g>
                      </svg> </span>
                    <span class="kt-widget17__subtitle">
                      <a href="transaksi/kembali">Pengembalian</a>
                    </span>
                    <span class="kt-widget17__desc">
                    <?= $count_kembali;?> Pengembalian
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--end:: Widgets/Activity-->
      </div>
      <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

        <!--begin:: Widgets/Inbound Bandwidth-->
        <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
          <div class="kt-portlet__head kt-portlet__space-x">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
                Total Buku
              </h3>
            </div>
          </div>
          <div class="kt-portlet__body kt-portlet__body--fluid">
            <div class="kt-widget20">
              <div class="kt-widget20__content kt-portlet__space-x">
                <span class="kt-widget20__number kt-font-brand"><?= $count_buku;?> Buku</span>
              </div>
              <div class="kt-widget20__chart" style="height:130px;">
              <svg xmlns="http://www.w3.org/2000/svg" height="6em" viewBox="0 0 448 512" style="margin-left:30px;" ><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#2a549d}</style><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
              </div>
            </div>
          </div>
        </div>

        <!--end:: Widgets/Inbound Bandwidth-->
        <div class="kt-space-20"></div>

        <!--begin:: Widgets/Outbound Bandwidth-->
        <div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
          <div class="kt-portlet__head kt-portlet__space-x">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
                Jumlah Rak
              </h3>
            </div>
          </div>
          <div class="kt-portlet__body kt-portlet__body--fluid">
            <div class="kt-widget20">
              <div class="kt-widget20__content kt-portlet__space-x">
                <span class="kt-widget20__number kt-font-danger">jml semua rak (...)</span>
              </div>
              <div class="kt-widget20__chart" style="height:130px;">
              <svg xmlns="http://www.w3.org/2000/svg" height="6em" viewBox="0 0 448 512" ><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 32v448h448V32H0zm358.4 179.2h-89.6v89.6h-89.6v89.6H89.6V121.6h268.8v89.6z"/></svg>
              </div>
            </div>
          </div>
        </div>

        <!--end:: Widgets/Outbound Bandwidth-->
      </div>
    </div>

</div>
</div>