@extends('user.template')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">


            </div>



            <div class="card-body" data-aos="zoom-out">
                {{-- atas nya --}}
                <div class="container card">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/img/ppdb.png') }}" alt="" class="w-50">
                        </div>
                        <div class="col-md-9">
                            <h3 class="text-center mt-3 ">kartu tanda peserta</h3>
                        </div>
                    </div>

                </div>

                {{-- isianya --}}
                <div class="container card">
                    <div class="row">
                        <div class="col-md-4 border">

                            <img src="{{ $formulir->photo }}" alt="" class="img-thumbnail w-100">
                        </div>
                        <div class="col-md-8">
                            <h4 style="text-align: start; margin-top:50px ">NAMA :</h4>
                            <h3><strong>{{ $formulir->full_name }}</strong></h3>
                            <h4 style="text-align: start margin-top:30px">NISN :</h4>
                            <h3><strong>{{ $formulir->nisn }}</strong></h3>
                            <h4 style="text-align: start margin-top:30px">NO REGISTERASI :</h4>
                            <h3><strong>REG-2021-{{ str_pad($formulir->id, 5, '0', STR_PAD_LEFT) }}</strong></h3>
                            <h4 style="text-align: start margin-top:30px">ASAL SEKOLAH :</h4>
                            <h3><strong>{{ $formulir->school }}</strong></h3>
                            <h4 style="text-align: start margin-top:30px">TEMPAT, TANGGAL LAHIR : :</h4>
                            <h3><strong>{{ $formulir->place }},
                                    {{ \Carbon\Carbon::parse($formulir->birthday)->format('d - F - Y') }}</strong></h3>

                        </div>
                    </div>
                </div>

                {{-- bawah , nilainya --}}
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
                                    @if ($formulir->nilai1 + $formulir->nilai2 >= 160)
                                        {{-- <th>status :</th> --}}
                                        <td> <span class="badge bg-success"> <i class="fas fa-check">lolos </i></span>
                                        </td>
                                    @elseif($formulir->nilai1 + $formulir->nilai2 < 160 && $formulir->nilai1
                                            + $formulir->nilai1 > 0)
                                            {{-- <th>status :</th> --}}
                                            <td> <span class="badge bg-danger"> <i class="fas fa-history">Belum
                                                        Lolos</i></span></td>
                                        @elseif($formulir->nilai1 + $formulir->nilai2 == 0)
                                            {{-- <th>status :</th> --}}
                                            <td> <span class="badge bg-warning"><i class="fas fa-history">Pending</i></span>
                                            </td>


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
                    <div class="d-flex justify-content-end"><a class=" btn btn-primary"
                            href="{{ route('generatecard', $formulir->id) }}" target="_blank">download</a></div>
                </div>

            </div>







        </div>
    </div>
    </div>


@endsection
