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
                        <h1 class="d-flex text-white fw-bold my-1 fs-3">Kode Referensi</h1>
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
                            <div id="tagScreenshot">
                            <!--begin::Meet-->
                            <div class="mb-11">
                                <!--begin::Wrapper-->
                                <div class="mb-11">
                                    <!--begin::Top-->
                                    <div class="mb-11">
                                        <div class="row">
                                           <!--begin::Title-->
                                           <h3 class="fs-2hx text-dark mb-6 text-center ">Reservasi Online Berhasil ! <img
                                                src="{{ url('assets/images/suksesicon.gif') }}"
                                                width="60" height="60" alt="Success" /></h3>
                                        <!--end::Title-->
                                        </div>
                                       

                                        <!--begin::Posts-->
                                        <div class="mb-10 mt-5" id="kt_social_feeds_posts">
                                            <!--begin::Post 1-->
                                            <!--begin::Card-->
                                            <div class="card card-flush mb-10">
                                                <!--begin::Posts-->
                                                <div class="container form-list-container text-center">
                                                    <h1>Kode Referensi: {{ $randomCode }}</h1>
                                                    <!-- Display the QR code image -->
                                                    <img src="data:image/png;base64,{{ base64_encode($qrCode) }}"
                                                        alt="QR Code" class="mt-3">

                                                    <h1 class="mt-3">QR Code Antrian</h1>
                                                    <p>Antrian berlaku dalam</p>
                                                    <h2> {{ $jamSebelumnya }} - {{ $jamSesudah }}</h2>
                                                    <h2>
                                                       @php
                                                            use Carbon\Carbon;
                                                            setlocale(LC_TIME, 'id_ID'); // Mengatur lokalisasi ke Bahasa Indonesia
                                                            $tanggal = $tanggalLayanan; // Ganti dengan variabel tanggal yang Anda terima dari controller
                                                            $tanggalFormat = Carbon::parse($tanggal)->format('d F Y');
                                                            $hariFormat = Carbon::parse($tanggal)->locale('id')->dayName;
                                                        @endphp
                                                        {{ $hariFormat }}, {{ $tanggalFormat }}
                                                    </h2>
                                                    <p>Silahkan melakukan check-in di</p>
                                                    <h2>{{ $kdrefcabang->nama_unit_kerja }}</h2>
                                                    <p>{{ $kdrefcabang->alamat }},{{ $kdrefcabang->kelurahan }},{{ $kdrefcabang->kecamatan }},{{ $kdrefcabang->kab_kota }}
                                                    </p>
                                                   
                                                  
                                                    <!-- <center>
                                                    <a id="saveAsImage" class="btn buttonUtama">
                                                        Simpan
                                                    </a>
                                                    </center> -->


                                                </div>
                                                <!--end::Posts-->
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
                            <center>
                                @foreach($relationTransaction as $rt)
                                <h1>Transaksi {{ $rt->relasiJabatan->jabatan }}</h1>
                                @endforeach
                            </center>
                       
                                    <!--begin::Top-->
                                    <div class="mb-18">
                                        <!--begin::Posts-->
                                        <div class="mb-10 mt-5" id="kt_social_feeds_posts">
                                            <!--begin::Post 1-->
                                            <!--begin::Card-->
                                            <div class="card card-flush mb-10">
                                                <!--begin::Posts-->
                                                <div class="container form-list-container text-center">
                                                 @foreach($relationTransaction as $rt)
                                                <h3> {{ $rt->relasiLayanan->nama_layanan }}</h3>
                                                @endforeach

                                                </div>
                                                <!--end::Posts-->
                                            </div>
                                            <!--end::Card-->
                                            <!--end::Post 1-->

                                        </div>
                                        <!--end::Posts-->
                                       
                                    </div>
                                    <!--end::Top-->
                               
                          
                            </div>
                            <div>
                                <center>
                                    <a id="saveAsImage" style=" display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    height: 45px;
                                    max-width: 200px;
                                    width: 100%;
                                    border: 3px solid #A11F27; 
                                    border-radius: 5px;
                                    margin: 25px 0;
                                    color: #A11F27;
                                    font-size: 18px;
                                    background-color: #fff;
                                    cursor: pointer;">
                                    Simpan
                                    </a>
                                </center>

                                <!-- <center>
                                    <a id="shareByEmail" class="btn buttonUtama">
                                        Bagikan
                                    </a>
                                </center> -->
                            </div>
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

<!-- Add this script to use html2canvas -->
<script>

history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
 
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: 'info',
                title: 'Info Message',
                text: 'Simpan QR code Anda!! QR code ini digunakan untuk melakukan proses check-in pada kantor cabang sesuai dengan reservasi yang anda lakukan',
                confirmButtonColor: '#A11F27',
                iconColor:'#A11F27'
            });
        });
   

    document.getElementById('saveAsImage').addEventListener('click', function () {
        // Get the container element of the view to be captured as an image
        const container = document.getElementById('tagScreenshot');

        // Use html2canvas to capture the entire view as an image
        html2canvas(container).then(canvas => {
            // Convert the canvas to a data URL (image/png)
            const dataURL = canvas.toDataURL('image/png');

            // Create a new link element to download the image
            const link = document.createElement('a');
            link.href = dataURL;
            link.download = 'view_screenshot.png';

            // Programmatically click the link to trigger the download
            link.click();
        });
    });

    // document.getElementById('shareByEmail').addEventListener('click', function () {
    //     // Get the container element of the view to be captured as an image
    //     const container = document.getElementById('kt_social_feeds_posts');

    //     // Use html2canvas to capture the entire view as an image
    //     html2canvas(container).then(canvas => {
    //         // Convert the canvas to a data URL (image/png)
    //         const dataURL = canvas.toDataURL('image/png');

    //         // Create a mailto link with the image as attachment
    //         const subject = encodeURIComponent('QR Code Antrian');
    //         const body = encodeURIComponent('Silahkan lihat tampilan QR code antrian:');
    //         const mailtoLink = `mailto:?subject=${subject}&body=${body}&attachment=${dataURL}`;

    //         // Open the email application with the mailto link
    //         window.location.href = mailtoLink;
    //     });
    // });
</script>

@endsection