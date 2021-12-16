<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('atlantis/assets/img/icon.ico') }}" type="image/x-icon" />



    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/assets/js/plugin/webfont/webfont.min.js') }}"></script>




    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('atlantis/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atlantis/assets/css/atlantis.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
    <title>{{ $formulir->full_name }}</title>

</head>

<body onload="window.print();">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title"></h4>

            </div>

            <div class="card-body">
                <div class="card-body" data-aos="zoom-out">
                    <div class="container card">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/img/ppdb.png') }}" alt="" class="w-50">
                            </div>
                            <div class="col-md-9">
                                <h3 class="text-center mt-3  ">Kartu Tanda Peserta</h3>
                            </div>
                        </div>

                    </div>
                    <div class="container card">
                        <div class="row">
                            <div class="col-md-3 border">
                                <img src="{{ url('storage/' . $formulir->photo) }}" alt=""
                                    class="img-thumbnail w-100">
                            </div>
                            <div class="col-md-9">
                                <h6 style="text-align: start">NAMA :</h6>
                                <h5><strong>{{ $formulir->full_name }}</strong></h5>
                                <h6 style="text-align: start">NISN :</h6>
                                <h5><strong>{{ $formulir->nisn }}</strong></h5>
                                <h6 style="text-align: start">NO REGISTERASI :</h6>
                                <h5><strong>REG-2021-{{ str_pad($formulir->id, 5, '0', STR_PAD_LEFT) }}</strong></h5>
                                <h6 style="text-align: start">ASAL SEKOLAH :</h6>
                                <h5><strong>{{ $formulir->school }}</strong></h5>
                                <h6 style="text-align: start">TEMPAT, TANGGAL LAHIR : :</h6>
                                <h5><strong>{{ $formulir->place }},
                                        {{ \Carbon\Carbon::parse($formulir->birthday)->format('d - F - Y') }}</strong>
                                </h5>

                            </div>
                        </div>
                        <div class="container card">
                            <div class="row">
                                <div class="col-md-6 border">
                                    <h4 style="text-align: start">Nilai SKD :</h4>
                                    <h3><strong>
                                            @if (!$formulir->nilai1)
                                                Nilai Kamu Belum Di konfirmasi
                                            @else
                                                {{ $formulir->nilai1 }}
                                            @endif

                                        </strong></h3>
                                    <h4 style="text-align: start">Nilai Wawancara :</h4>
                                    <h3><strong>
                                            @if (!$formulir->nilai2)
                                                Nilai Kamu Belum Di konfirmasi
                                            @else
                                                {{ $formulir->nilai2 }}
                                            @endif

                                        </strong></h3>
                                </div>
                                <div class="col-md-6">

                                    <h4 style="text-align: start; margin-top:50px"> STATUS KELULUSAN :</h4>
                                    <h3><strong>
                                            @if ($formulir->status == 1)
                                                <span class="badge bg-success"> <i class="fas fa-check">lolos
                                                    </i></span>
                                            @elseif ($formulir->status == 2)
                                                <span class="badge bg-primary"> <i class="fas fa-history">Pending
                                                    </i></span>
                                            @else
                                                <span class="badge bg-warning"> <i class="fas fa-times">
                                                        &NonBreakingSpace; Tidak
                                                        Lolos
                                                    </i></span>

                                            @endif
                                        </strong></h3>

                                </div>
                            </div>
                        </div>
                        <div class="container card">
                            <div class="row">
                                <div class="col-md-12 border">
                                    <h4>*Catatan</h4>
                                    <h5>-Jika pending berarti anda belum mengerjakan soal

                                    </h5>
                                    <h5>-jika lolos langsung daftar ulang ke nomor 08966xxxx

                                    </h5>
                                    <h5>-jika belum lolos maka bersabar , dan jangan pantang menyerah

                                    </h5>
                                </div>

                            </div>




                        </div>


                    </div>
                </div>



                {{-- <div class="row mt-4"> --}}
                {{-- <div class="col"> --}}
                {{-- <div class="table-responsive"> --}}
                {{-- <table class="table text-center table-bordered  ">
                    <thead>
                        <tr>
                            <td colspan="6"><strong>Kartu Bukti Pendaftaran</strong></td>


                        </tr>
                    </thead>


                    <tbody>

                        <tr>
                            <td rowspan="10" colspan="3" style="width: 20%"><img
                                    src="{{ url('storage/' . $formulir->photo) }}" alt="" style="height: 200%"
                                    class="img-fluid rounded"></td>
                        </tr>
                        <tr style="height: 20px; text-decoration: none">
                            <td>
                                <p style="text-align: start">NAMA :</p>
                                <p>{{ $formulir->full_name }}</p>
                            </td>
                        </tr>
                        <tr style="height: 20px; text-decoration: none">
                            <td>
                                <p style="text-align: start">NOMER REGISTERASI :</p>
                                <p>REG-2021-{{ str_pad($formulir->id, 5, '0', STR_PAD_LEFT) }}</p>
                            </td>
                        </tr>
                        <tr style="height: 20px; text-decoration: none">
                            <td>
                                <p style="text-align: start">NISN :</p>
                                <p>{{ $formulir->nisn }}</p>
                            </td>
                        </tr>
                        <tr style="height: 20px; text-decoration: none">
                            <td>
                                <p style="text-align: start">ASAL SEKOLAH :</p>
                                <p>{{ $formulir->school }}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="table text-center table-bordered  ">
                    <thead>
                        <tr>
                            <td colspan="7" rowspan="6">
                                <h4 style="text-align: start">Pernyataan</h4>
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eius voluptates
                                    accusamus
                                    quas. Fugiat aspernatur voluptatem sapiente! Natus quos numquam voluptate? Fuga quod
                                    laborum quia corrupti incidunt blanditiis. Quia, esse.</h6>
                            </td>
                        <tr>
                    </thead>

                </table> --}}


                {{-- </div> --}}
                {{-- </div> --}}






            </div>
        </div>
    </div>
</body>
<!-- jQuery Sparkline -->
<script src="{{ asset('atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('atlantis/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('atlantis/assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

<!-- jQuery Vector Maps -->
<script src="{{ asset('atlantis/assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('atlantis/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('atlantis/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Vendor JS Files -->
{{-- <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}

<!-- Template Main JS File -->
{{-- <script src="{{ asset('assets/js/main.js') }}"></script> --}}

</html>
