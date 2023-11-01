@extends('layouts.main')

@section('content')
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header"
                data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container-xxl d-flex align-items-center">
                    <!--begin::Heaeder menu toggle-->
                    <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                        <div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px"
                            id="kt_header_menu_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="currentColor" />
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Heaeder menu toggle-->
                    <!--begin::Header Logo-->
                    <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                        <a href="/">
                            <img alt="Logo" src="assets/images/bank_dki_white.svg" class="logo-default h-25px" />
                            <img alt="Logo" src="assets/images/bank_dki_white.svg" class="logo-sticky h-25px" />
                        </a>
                    </div>
                    <!--end::Header Logo-->

                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Toolbar-->
            <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
                <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column me-3">
                        <!--begin::Title-->
                        <h1 class="d-flex text-white fw-bold my-1 fs-3">Scan QR Code IKD</h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Page title-->

                </div>
                <!--end::Container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Container-->
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::About card-->
                    <div id="card_main_menu" class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-17">
                            <!--begin::Meet-->
                            <div class="mb-18">
                                <!--begin::Wrapper-->
                                <div class="mb-11">
                                    <!--begin::Top-->
                                    <div class="mb-18">
                                        <!--begin::Title-->
                                        <h3 class="fs-2hx text-dark mb-6 text-center ">Scan QR</h3>
                                        <!--end::Title-->
                                        <!--begin::Posts-->                         
                                        <div class="mb-10 mt-5" id="kt_social_feeds_posts">                            
                                            
                                                <!--begin::Post 1-->
                                                <!--begin::Card-->
                                                
                                                <div class="card card-flush2 mb-10" onclick="" style="cursor: pointer;">
                                                <div class="row">
                                                    <!--begin::Card header-->
                                                    <div class="card-header pt-9">
                                                        <div class="col-lg-12 col-md-12 col-12">
                                                        <!--begin::Author-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1">
                                                                <!--begin::Name-->                                          
                                                                <video id="preview"></video>
                                                                <input type="text" name="text" id="text" placeholder="scan qr code" class="form-control">
                                                                <!--end::Name-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Author-->
                                                        </div>
                                                    </div>
                                                    <!--end::Card header-->
                                                    </div>
                                                    <!--begin::Card body-->
                                                    <div class="card-body">
                                                        <!--begin::Post content-->
                                                        <div class="fs-6 fw-normal text-gray-700"></div>
                                                        <!--end::Post content-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                                <!--end::Post 1-->                               
                                        </div>                            
                                        <!--end::Posts-->
                                    </div>
                                    <!--end::Top-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Meet-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::About card-->
                </div>
                <!--end::Post-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>

<script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          alert('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });

      scanner.addListener('scan', function (c) {
        document.getElementById('text').value=c;
      });

    </script>

@endsection