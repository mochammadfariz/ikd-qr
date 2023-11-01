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
                        <h1 class="d-flex text-white fw-bold my-1 fs-3">Menu Layanan {{ $namaLayanan->jabatan }}
                            
                        </h1>
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
                                        <h3 class="fs-2hx text-dark mb-6 text-center">Reservasi {{ $namaLayanan->jabatan }}</h3>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <!--begin::Search Bar-->
                                                <form data-kt-search-element="form"
                                                    class="w-100 position-relative mb-5 mt-3 card-flush"
                                                    autocomplete="off">
                                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                    <input type="hidden">
                                                    <!--end::Hidden input-->
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span
                                                        class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                                height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                                fill="currentColor"></rect>
                                                            <path
                                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <form action="{{url('menu-teller')}}" method="GET">
                                                    <input type="hidden"
                                                        name="id"
                                                        value="{{ $id_jabata_enc }}"
                                                        >
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid px-15 text-center"
                                                        name="search" placeholder="Cari Layanan {{ $namaLayanan->jabatan }}"
                                                        data-kt-search-element="input" value=""
                                                        >
                                                    <!--end::Input-->
                                                    </form>
                                                    <!--begin::Spinner-->
                                                    <span
                                                        class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                                        data-kt-search-element="spinner">
                                                        <span
                                                            class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                                    </span>
                                                    <!--end::Spinner-->
                                                    <!--begin::Reset-->
                                                    <span
                                                        class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                                        data-kt-search-element="clear">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                    height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor"></rect>
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
                                                                    fill="currentColor"></rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <!--end::Reset-->
                                                </form>
                                                <!--End::Search Bar-->
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                    <!--end::Text-->
                                    <!--begin::Posts-->
                                    <div class="row transaction-list-container">
                                        <div class="col-md-15">
                                            <!--begin::Post 1-->
                                            <div class="row transaction-list">
                                            @foreach($menuLayanan as $l)
                                           
                                                <div class="col-md-4" onclick="location.href='{{route('pilih-jadwal',['id'=>request('id'),'id_cabang'=>request('id_cabang'),'id_layanan'=>enkripSHA256($l->id)])}}';" style="cursor: pointer;">
                                                    <div class="cardBaru card-flush mb-4">
                                                        <div class="card-body text-center">
                                                            <div class="mb-3">
                                                                <img src="{{ url('assets/images/icon/menulayanan/'. $l->src) }}"
                                                                    width="50" height="35" alt="Pembukaan Rekening" />
                                                            </div>
                                                            <div
                                                                class="text-gray-800 text-hover-primary fs-4 fw-semibold">
                                                                {{ $l-> nama_layanan }}
                                                            </div>
                                                            <div class="text-gray-500 fs-6 fw-medium">
                                                                <img src="assets/media/logo/ceklist.png" width="14"
                                                                    height="14" alt="check"> Antrian
                                                                Tersedia
                                                            </div>
                                                            <!-- <div class="mt-4">
                                                                <a href="{{route('pilih-jadwal',['id'=>request('id'),'id_cabang'=>request('id_cabang'),'id_layanan'=>enkripSHA256($l->id)])}}"
                                                                    class="btn btnMerah btn-block" role="button">Pilih
                                                                    Transaksi</a> -->
                                                                    <!-- <a id="reservasi" class="btn buttonUtama btn-block" href="{{route('pilih-jadwal',['id'=>request('id'),'id_cabang'=>request('id_cabang'),'id_layanan'=>enkripSHA256($l->id)])}}">
                                                                            Reservasi
                                                                    </a> -->
                                                            <!-- </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            @endforeach
                                            </div>
                                            <!--end::Post 1-->
                                        </div>
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

@endsection
