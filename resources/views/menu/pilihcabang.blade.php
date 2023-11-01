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
                        <h1 class="d-flex text-white fw-bold my-1 fs-3">Pilih Cabang</h1>
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
                                        <h3 class="fs-2hx text-dark mb-6 text-center">Kantor Cabang Bank DKI</h3>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <!--begin::Search Bar-->
                                                <form action="" method="GET" data-kt-search-element="form"
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
                                                    <input type="hidden"
                                                        name="id"
                                                        value="{{ $id_jabata_enc }}"
                                                        >
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid px-15 text-center"
                                                        name="search" placeholder="Cari Kantor Cabang Bank DKI"
                                                        data-kt-search-element="input" value=""
                                                        >
                                                    <!--end::Input-->
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
                                                <!-- <center>
                                                    <button class="btn btn-danger text-light"
                                                        onclick="getLocation()">Sekitar Saya</button>
                                                    <p id="demo"></p>
                                                </center> -->
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                    <!--end::Text-->
                                    <!-- begin::maps -->
                                    <!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->
                                    <!-- end::maps -->
                                    <!--begin::Posts-->
                                    <div class="mb-10 mt-5" id="kt_social_feeds_posts">
                                        <!--begin::Post 1-->
                                        <br><br>
                                        <div id="dataContainer"></div>
            
                                        <!--begin::Card-->
                                        @foreach($viewCabang as $l)

                                            <div class="card h-100 card-flush mb-10" id="{{ $l -> nama_unit_kerja }}"
                                                data-kt-scroll-offset="{default: 100, lg: 150}" onclick="location.href='{{route('menu-layanan', ['id'=>request('id'),'id_cabang'=>enkripSHA256($l->id_cabang)])}}';" style="cursor: pointer;">
                                                <!--begin::Card header-->
                                                <div class="card-header pt-9">
                                                 <div class="col-lg-1 col-md-12 col-sm-12 col-12">
                                                 <div class="p-2"><img
                                                        src="assets/media/icons/bankdki/kantorcabang.svg"></div>
                                                        <!-- <div class="p-2">
                                                            <h3>2.2 km</h3>
                                                        </div> -->
                                                 </div>
                                                 <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                                        <!--begin::Info-->
                                                        <div>
                                                           
                                                            <!--begin::Name-->
                                                            <a 
                                                                class="text-gray-800 text-hover-primary fs-4 fw-bold">
                                                                <h2> {{ $l -> nama_unit_kerja }}</h2>
                                                            </a>
                                                            <!--end::Name-->
                                                         
                                                            <!--begin::Address-->
                                                            <span> 
                                                                <h5 class="text-gray-400 fw-semibold mt-2">
                                                                    {{$l->alamat}}
                                                                    {{$l->kelurahan}},
                                                                    {{$l->kecamatan}},
                                                                    {{$l->kab_kota}},
                                                                    {{$l->provinsi}}
                                                                </h4>                      
                                                            </span>
                                                            <!--end::Address-->
                                                        </div>
                                                        <!--end::Info-->
                                                 </div>
                                                
                                                 <div class="col-lg-3 offset-lg-1 col-md-12 col-sm-12 col-12 ">
                                                     <!--begin::Info-->
                                                            <!--begin::Name-->
                                                           
                                                                    <a
                                                                        class="text-gray-800 text-hover-primary fs-4 fw-bold">
                                                                        <h2>Jumlah antrian saat ini: 
                                                                        @if(isset($l->jumlah_sedang_mengantri))
                                                                            {{ $l->jumlah_sedang_mengantri }}
                                                                        @else
                                                                            0
                                                                        @endif
                                                                        </h2>
                                                                    </a>
                                                               
                                                            <!--end::Name-->                                           
                                                        <!--end::Info-->
                                                </div>

                                               
                                                <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-inline">
                                                     <!--begin::Info-->
                                                     <img style='vertical-align:middle;' src="assets/images/infolokasi.svg" alt="">
                                                     <a href="{{$l->link_lokasi}}" style='vertical-align:middle; display:inline;' class="text-gray-800 text-hover-primary fs-4 fw-bold">
                                                                        <h2 style="display: inline">
                                                                            Info Lokasi
                                                                        </h2>
                                                                    </a> </img>                                         
                                                        <!--end::Info-->
                                                </div>
                                                
                                                <!-- <div class="col-lg-1 col-md-12 col-sm-12 col-12"> -->
                                                     <!--begin::Card toolbar-->
                                                  
                                                        <!--begin::Menu wrapper-->
                                                     
                                                            <!--begin::Menu toggle-->
                                                <!-- <a id="reservasi" class="btn btnMerah btn-block" href="{{route('menu-layanan', ['id'=>request('id'),'id_cabang'=>enkripSHA256($l->id_cabang)])}}">
                                                    Reservasi
                                                </a> -->
                                                            <!--end::Menu toggle-->
                                                       
                                                        
                                                        <!--end::Menu wrapper-->
                                                 
                                                    <!--end::Card toolbar-->
                                                <!-- </div> -->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body">
                                                    <!--begin::Post content-->
                                                    <div class="fs-6 fw-normal text-gray-700"></div>
                                                    <!--end::Post content-->
                                                </div>
                                                <!--end::Card body-->

                                            </div>
                                            <!--end::Card-->
                                        @endforeach
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
<!-- begin:: Show maps -->


<!-- <script>
    function myMap(position) {
        // console.log(position);
        let dataFromBlade = '{{ $id_jabata_enc }}';
        let ajaxMapUrl = '/location-cabang?id=' + encodeURIComponent(dataFromBlade);
        let mapProp = {
            center: new google.maps.LatLng(position?.coords?.latitude ?? 0, position?.coords?.longitude ?? 0),
            zoom: 15,
        };
        let maps = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        $.ajax({
            // url: "/location-cabang-Teller",
            url: ajaxMapUrl,
            type: "GET",
            success: function (data) {
                // console.log(data);
                let currWindow = false;
                let latitudes = [];
                let longitudes = [];
                let names = [];
                let values = [];
                let obj = [];
                let dataContainer = document.getElementById("dataContainer");
                // console.log(data);
                data.forEach(function (item) {
                    // console.log(item.nama_unit_kerja);
                    latitudes.push(item.latitude);
                    longitudes.push(item.longitude);
                    names.push(item.nama_cabang);
                    let markerKC = new google.maps.Marker({
                        position: new google.maps.LatLng(item.latitude, item.longitude),
                        map: maps,
                        icon: '/assets/images/markercabang.svg',
                        label: null,
                    });
                    let infowindow = null;
                    google.maps.event.addListener(
                        markerKC,
                        "click",
                        function (e) {
                            let contentString = '<div id="content">' +
                                '<div id="siteNotice">' +
                                '</div>' +
                                '<h1 id="firstHeading" class="firstHeading">' +
                                '<a data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" href="#' +
                                item.nama_unit_kerja + '">' +
                                item.nama_unit_kerja + '</a>' + '</h1>' +
                                '<div id="bodyContent">' + '</div>' +
                                '</div>';
                            // console.log(markerKC.label = item.nama_cabang);
                            infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });
                            if (currWindow) {
                                currWindow.close();
                            }
                            currWindow = infowindow;
                            infowindow.open(maps, markerKC);
                        }
                    );
                })

                // console.log(latitudes);
                for (let i = 0; i < latitudes.length; i++) {
                    obj = {
                        name: names[i],
                        lat: latitudes[i],
                        lng: longitudes[i],
                    };
                    values.push(obj);
                }
                // console.log(values);
                // Fungsi untuk menghitung jarak antara dua titik koordinat menggunakan Haversine formula
                function calculateDistance(lat1, lng1, lat2, lng2) {
                    let radius = 6371; // Radius bumi dalam kilometer
                    let dLat = toRadians(lat2 - lat1);
                    let dLng = toRadians(lng2 - lng1);
                    let a =
                        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                        Math.cos(toRadians(lat1)) *
                        Math.cos(toRadians(lat2)) *
                        Math.sin(dLng / 2) *
                        Math.sin(dLng / 2);
                    let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                    let distance = radius * c;
                    return distance;
                }

                function toRadians(degrees) {
                    return (degrees * Math.PI) / 180;
                }

                // Fungsi untuk mengurutkan lokasi berdasarkan jarak terdekat
                function sortLocationsByDistance(userLocation, radius) {
                    // console.log(typeof userLocation.lat);
                    // console.log(obj);
                    // console.log(userLocation);
                    values.sort(function (a, b) {
                        // console.log(typeof a);
                        let distanceA = calculateDistance(
                            userLocation.lat,
                            userLocation.lng,
                            a.lat,
                            a.lng
                        );
                        let distanceB = calculateDistance(
                            userLocation.lat,
                            userLocation.lng,
                            b.lat,
                            b.lng
                        );
                        // console.log(distanceA - distanceB);
                        return distanceA - distanceB;
                    });
                    // Filter hanya lokasi yang berjarak kurang dari atau sama dengan radius yang ditentukan
                    values = values.filter(function (location) {
                        let distance = calculateDistance(
                            userLocation.lat,
                            userLocation.lng,
                            location.lat,
                            location.lng
                        );
                        return distance <= radius;
                    });
                }



                // Lokasi pengguna (misalnya: koordinat pengguna saat ini)
                let userLocation = {
                    lat: position?.coords?.latitude ?? 0,
                    lng: position?.coords?.longitude ?? 0
                };

                // console.log('aku lokasi user skrg', userLocation);

                // Urutkan lokasi berdasarkan jarak terdekat dengan radius 5 km
                sortLocationsByDistance(userLocation, 5);

                // Tampilkan urutan jarak terdekat
                for (let i = 0; i < values.length; i++) {
                    let distance = calculateDistance(
                        userLocation.lat,
                        userLocation.lng,
                        values[i].lat,
                        values[i].lng
                    );
                    // console.log(values[i].name + " - " + distance.toFixed(2) + " km");
                        // Membuat elemen li untuk setiap data
                        // let li = document.createElement("li");
                        // li.innerHTML = "<p>Nama: " + values[i].name + "</p>" +
                        //         "<p>Umur: " + distance.toFixed(2) + " km" + "</p>";
                      
                        // Memasukkanlemen li ke dalam elemen ul (dataContainer)
                        // dataContainer.appendChild(li);
                }
            },
            error: function () {
                console.log('error')
            }
        });

    
        let markerUser = new google.maps.Marker({
            position: new google.maps.LatLng(position?.coords?.latitude ?? 0, position?.coords?.longitude ?? 0),
            map: maps,
            animation: google.maps.Animation.BOUNCE
        }); 

        console.log(markerUser.position.coords);
    }
</script>

<script>

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyuf2QscnBojOdlbM3U9sSqQSakVR9K4k&callback=myMap">
</script> -->
<!-- End:: Show maps -->
<!-- begin:: Current Location -->
<!-- <script>
    let x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(myMap);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    getLocation();

</script> -->
<!-- End:: Show maps -->
@endsection
