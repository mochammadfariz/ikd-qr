<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link href="{{ asset('assets/css/jquery.timepicker.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
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
                        <h1 class="d-flex text-white fw-bold my-1 fs-3">{{ $jenLayanan->nama_layanan }}</h1>
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
                                        <h3 class="fs-2hx text-dark mb-6 text-center ">Booking Jadwal</h3>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fs-5 fw-semibold mb-5 text-center ">
                                            <br /></div>
                                        <br>
                                        <!--end::Text-->
                                        <!--begin::Posts-->
                                        <div class="mb-10 mt-5" id="kt_social_feeds_posts">

                                            <!--begin::Post 1-->
                                            <!--begin::Card-->
                                            <div class="card card-flush mb-10">
                                                <!--begin::Posts-->
                                                <div class="container form-list-container">
                                                    <form action="{{route('pilih-waktu-submit',['id'=>request('id'),'id_cabang'=>request('id_cabang'),'id_layanan'=>request('id_layanan')])}}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @if($jenLayanan->kode_layanan == 'TL02')
                                                        <div class="form form-list-first">
                                                            <div class="input-field">
                                                                <!--begin::Label-->
                                                                <label>Kategori Nominal</label>
                                                                <!--end::Label-->
                                                                <select onchange="hidePages(this.value)"
                                                                    id="kategorinominal"
                                                                    name="kategorinominal" class="form-select"
                                                                    data-control="select2" data-hide-search="true"
                                                                    data-placeholder="-- Pilih kategori nominal --" required>
                                                                    <option value="kuranglimit">Nominal < Rp100 Juta</option>
                                                                    <option value="lebihlimit">Nominal > Rp100 Juta </option>
                                                                </select>
                                                            </div>

                                                            <div class="input-field mt-3" id="inputanemail">
                                                                <!--begin::Label-->
                                                                <label for="email">Email</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="email" class="form-control" placeholder=""
                                                                    name="email" id="email">
                                                                <!--end::Input-->
                                                            </div>

                                                            <div class="input-field mt-3" id="inputannominal">
                                                                <!--begin::Label-->
                                                                <label>Nominal</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control" placeholder=""
                                                                    name="nominal" id="nominal" required>
                                                                <!--end::Input-->
                                                            </div>

                                                            <div class="input-field mt-3" id="inputannamalengkap">
                                                                <!--begin::Label-->
                                                                <label>Nama Lengkap</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control" placeholder=""
                                                                    name="namalengkap" id="namalengkap" required>
                                                                <!--end::Input-->
                                                            </div>
                                                           
                                                            <div class="input-field mt-3" id="inputannohp">
                                                                <!--begin::Label-->
                                                                <label>Nomor HP</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="tel" pattern="[0-9]+" title="Harap masukkan hanya angka" class="form-control" placeholder=""
                                                             name="nohp" id="nohp"  maxlength="14" required>
                                                                <!--end::Input-->
                                                            </div>
                                                            @endif
                                                            @if (session('success'))
                                                            <script>
                                                                Swal.fire({
                                                                    icon: 'success',
                                                                    title: 'Sukses',
                                                                    text: '{{ session("success") }}',
                                                                });
                                                            </script>
                                                            @endif

                                                            @if (session('error'))
                                                            <script>
                                                                Swal.fire({
                                                                    icon: 'error',
                                                                    title: 'Oops...',
                                                                    text: '{{ session("error") }}',
                                                                });
                                                            </script>
                                                            @endif

                                                                            <div class="row">
                                                                                <div class="col lg-6 md-6 sm-12">
                                                                                <div class="input-field">
                                                                                    <label>Pilih Tanggal</label>
                                                                                    <input class="form-control" name="pilihtanggal" id="pilihtanggal"
                                                                                        type="date" placeholder="Tanggal Booking" required>
                                                                                </div>
                                                                                </div>
                                                                                <div class="col lg-6 md-6 sm-12">
                                                                                <div class="input-field">
                                                                                    <label>Pilih Waktu</label>
                                                                                    <input class="form-control" type="time" id="timepicker" name="pilihwaktu" required>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                             
                                                               
                                                         

                                                            <div class="input-field mt-3" id="inputanbiaya">
                                                                <!--begin::Label-->
                                                                <label for="biaya">Biaya</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control" placeholder=""
                                                                    name="biaya" id="biaya" disabled value={{$biayaAdmin}}>
                                                                <!--end::Input-->
                                                            </div>

                                                            <div class="captcha" data-callback="recaptchaCallback">
                                                                <div class="input-field">
                                                                    <label for="captcha-input">Masukkan Captcha</label>
                                                                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Le2LEwnAAAAALG71by6KmCl3wGogFLDEMnAXxGX"></div>
                                                                </div>
                                                            </div>

                                                            <!-- <div class="buttons" style="justify-content: center"> -->
                                                                <button type ="submit" class="nextBtn" id="submitBtn" disabled>
                                                                    <span class="btnText">Submit</span>
                                                                </button>
                                                            <!-- </div> -->
                                                        </div>
                                                    </form>
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



<script>
// let sites = {!! json_encode($jamLayanan->toArray(), JSON_HEX_TAG) !!};
let sites = @json($jamLayanan);
// console.log(sites);
// console.log(sites[0].waktu_mulai);
// console.log(sites[0].waktu_selesai);
// Memisahkan jam, menit, dan detik
timeString = sites.waktu_mulai;
timeString2 = sites.waktu_selesai;
let timePartsz = timeString.split(":");
let hoursP = timePartsz[0];
let minutesP = timePartsz[1];
let timePartsz2 = timeString2.split(":");
let hoursP2 = timePartsz2[0];
let minutesP2 = timePartsz2[1];
// Format waktu "08:00"
let formattedTime = hoursP + ":" + minutesP;
let formattedTime2 = hoursP2 + ":" + minutesP2;
// console.log(formattedTime);
// console.log(formattedTime2); 

let idLayanan = "{{$id_layanan}}";
let minTimes = formattedTime;
let maxTimes = formattedTime2;
let timeParts = maxTimes.split(':'); // Membagi string menjadi array ['14', '00']
let hoursMaxTimes = parseInt(timeParts[0]); // Mengubah string '14' menjadi angka 14
let timeFormats = 'H:i';
let hours = String(new Date().getHours() + 1).padStart(2, '0');
let hoursNum = parseInt(hours);
let nows = new Date().toISOString().split('T')[0];
// let valDatePick = document.getElementById('pilihtanggal').value;
let inputTanggal = document.getElementById("pilihtanggal");
let inputWaktu = document.getElementById("timepicker");
let kategoriNominal = document.getElementById("kategorinominal");
let email = document.getElementById("email");
let nominal = document.getElementById("nominal");
let namaLengkap = document.getElementById("namalengkap");
let noHP = document.getElementById("nohp");
let inputBiaya = document.getElementById("inputanbiaya");
let inputNom = document.getElementById("inputannominal");
let inputNoHp = document.getElementById("inputannohp");
let inputNamaLengkap = document.getElementById("inputannamalengkap");
let inputEmail = document.getElementById("inputanemail");

// Mendapatkan tanggal saat ini (sebagai contoh, tanggal minimum adalah hari ini)
let tanggalSaatIni = new Date().toISOString().split('T')[0];

// Mendapatkan tanggal saat ini
let tanggalSaatIniAja = new Date();

// Menambahkan 7 hari pada tanggal saat ini untuk mendapatkan tanggal maksimal 7 hari ke depan
tanggalSaatIniAja.setDate(tanggalSaatIniAja.getDate() + 7);

// Konversi tanggal maksimal menjadi string dalam format YYYY-MM-DD (ISO format)
let tanggalMaksimal = tanggalSaatIniAja.toISOString().split('T')[0];

 // Mendapatkan tanggal saat ini
 let tanggalSaatIni2 = new Date();
// Menambahkan 1 hari pada tanggal saat ini untuk mendapatkan tanggal besok
tanggalSaatIni2.setDate(tanggalSaatIni2.getDate() + 1);
// Konversi tanggal besok menjadi string dalam format YYYY-MM-DD (ISO format)
let tanggalBesok = tanggalSaatIni2.toISOString().split('T')[0];

inputTanggal.addEventListener('input', function(e){
  let day = new Date(this.value).getUTCDay();
  if([6,0].includes(day)){
    e.preventDefault();
    this.value = '';
    // alert('Weekends not allowed');
    Swal.fire({
                icon: 'error',
                title: 'Waktu Layanan Hari Libur',
                text: 'Waktu layanan hari sabtu dan minggu tidak tersedia, silakan pilih hari lain.'
            });
  }
  if(idLayanan=="2"&&this.value==nows&&kategorinominal.value=='lebihlimit'){
    // Menggunakan SweetAlert untuk pesan
    Swal.fire({
                icon: 'info',
                title: 'Biaya Admin',
                text: 'Memilih transaksi tarik tunai lebih dari 100 juta rupiah di hari yang sama dikenakan biaya admin.'
            });
    inputBiaya.style.display = 'block';
  } else if (idLayanan=="2"&&this.value!=nows&&kategorinominal.value=='lebihlimit') {
    inputBiaya.style.display = 'none';
  }
});

function recaptchaCallback() {
    $('#submitBtn').removeAttr('disabled');
};

$(document).ready(function(){
    $("#submitBtn").click(function(e){
        let valNomi =  ($('#nominal').val() ?? '').toString();
        let postStringNom =  parseFloat(valNomi.replace(/[^0-9]/g, ''));
        if(postStringNom < 100000000)
         {
            e.preventDefault(); 
            Swal.fire({
                icon: 'error',
                title: 'Nominal tidak sesuai',
                text: 'Nominal yang diinput kurang dari 100 juta rupiah.',
                confirmButtonColor: '#A11F27',
                iconColor:'#A11F27'
            });
         } 
    });
});

$('#timepicker').timepicker({
        'minTime': minTimes,
        'maxTime': maxTimes,
        'timeFormat': 'H:i',
  })

  setDateNow();
  function setDateNow(){
    inputTanggal.setAttribute('min', tanggalSaatIni);
    inputTanggal.setAttribute('max', tanggalMaksimal);
  };


$('#pilihtanggal').on('change',function(){
    document.getElementById("timepicker").disabled = false;
    let valDatePick = document.getElementById('pilihtanggal').value;
    if(nows===valDatePick){    
    $('#timepicker').timepicker('option', 'minTime', hours );
    if(hoursNum>hoursMaxTimes){
    // Menggunakan SweetAlert untuk pesan
    Swal.fire({
                icon: 'error',
                title: '',
                confirmButtonColor: '#A11F27',
                html: "Untuk layanan reservasi online berakhir sampai pukul 14.00 WIB. Nasabah dapat mengunjungi lokasi kantor cabang Bank DKI terdekat <br> (jam layanan: 08.00-15.00 WIB)."
            });
    document.getElementById("timepicker").disabled = true;
    };
}
    else{
    $('#timepicker').timepicker('option', 'minTime', minTimes );
    }
});
    
function hidePages(nom) {
    if (nom == "kuranglimit") {
        inputNom.style.display = 'none';
        inputNoHp.style.display = 'none';
        inputNamaLengkap.style.display = 'none';
        inputEmail.style.display = 'none';
        inputTanggal.setAttribute("required", "required");
        inputWaktu.setAttribute("required", "required");
        kategoriNominal.removeAttribute("required");
        nominal.removeAttribute("required");
        namaLengkap.removeAttribute("required");
        noHP.removeAttribute("required");
        // Mengatur atribut 'min' dengan nilai tanggal saat ini
        inputTanggal.setAttribute('min', tanggalSaatIni);
        inputTanggal.setAttribute('max', tanggalMaksimal);
    } 
    else {
        inputNom.style.display = 'block';
        inputNoHp.style.display = 'block';
        inputNamaLengkap.style.display = 'block';
        inputEmail.style.display = 'block';
        inputTanggal.setAttribute("required", "required");
        inputWaktu.setAttribute("required", "required");
        kategoriNominal.setAttribute("required", "required");
        nominal.setAttribute("required", "required");
        namaLengkap.setAttribute("required", "required");
        noHP.setAttribute("required", "required");
        inputTanggal.setAttribute('min', tanggalSaatIni);
        inputTanggal.setAttribute('max', tanggalMaksimal);
}

    // Menonaktifkan tanggal Sabtu dan Minggu
    let dateInputElements = document.getElementById("pilihtanggal");
    for (let i = 0; i < dateInputElements.length; i++) {
    let input = dateInputElements[i];
    let date = new Date(input.value);
    let dayOfWeek = date.getDay();
    if (dayOfWeek === 6 || dayOfWeek === 0) { // 6 = Sabtu, 0 = Minggu
        input.disabled = true;
    } else {
        input.disabled = false;
          // Menggunakan SweetAlert untuk pesan
    Swal.fire({
                icon: 'error',
                title: 'Jam Layanan Sudah Tutup',
                text: 'Jam layanan sudah tutup, silakan pilih hari lain.'
            });
    }
};
}
    // function formatter rupiah
    let harga = document.getElementById('nominal');
    if(harga){
        harga.addEventListener('keyup', function (e) {
        harga.value = formatRupiah(this.value, 'Rp');
    });
    }
    // function typing
    //setup before functions
    let typingTimer; //timer identifier
    let doneTypingInterval = 1000; //time in ms, 5 seconds for example
    let $input = $('#nominal');

    function formatRupiah(angka, prefix) {
        let number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
    }


</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="{{ asset('assets/js/thirdparty/sweetalert.min.js') }}"></script>
</body>
</html>

