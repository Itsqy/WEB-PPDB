<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ $formulir->full_name }}</title>
</head>

<body onload="window.print();">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title"></h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            {{-- <i class="flaticon-home"></i> --}}
                        </a>
                    </li>
                    <li class="separator">
                        {{-- <i class="flaticon-right-arrow"></i> --}}
                    </li>
                    <li class="nav-item">
                        <a href="#"></a>
                    </li>
                    <li class="separator">
                        {{-- <i class="flaticon-right-arrow"></i> --}}
                    </li>
                    <li class="nav-item">
                        <a href="#"></a>
                    </li>
                </ul>
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










            </div>
        </div>
    </div>
</body>

</html>
