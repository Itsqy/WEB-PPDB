<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
        img {
            height: 100px;
            ;
        }

        hr.solid {
            border-top: 2px solid #3B82F6;
        }

    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="title text-center mb-5">
            <h2>Kartu Peserta</h2>

        </div>
        <hr class="solid">

        <div>
            <h6>Jangan Sampai hilang !!!</h6>
            <h6>{{ $formulir->created_at->format('l, d F Y') }}</h6>
        </div>
        <hr class="solid">

        <div class="mt-3 mb-3">
            <table width="100%">
                <tr>
                    <td colspan="2">
                        <h3>A. Data Pribadi</h3>
                    </td>
                </tr>


                <tr>
                    <td> Nama </td>
                    <td>: {{ $formulir->full_name }}</td>
                </tr>
                <tr>
                    <td> NISN </td>
                    <td>: {{ $formulir->nisn }}</td>
                </tr>
                <tr>
                    <td> Tempat dan Tanggal Lahir </td>
                    <td>: {{ $formulir->bithday }},
                        {{ Carbon\Carbon::parse($formulir->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
                </tr>
                <tr>
                    <td> Jenis Kelamin </td>
                    <td>: {{ $formulir->gender }}</td>
                </tr>
                <tr>
                    <td> Anak Ke </td>
                    <td>: {{ $formulir->anak_ke }}</td>
                </tr>
                <tr>
                    <td> Jumlah Saudara </td>
                    <td>: {{ $formulir->jml_saudara }}</td>
                </tr>
                <tr>
                    <td> Anak Ke </td>
                    <td>: {{ $formulir->anak_ke }}</td>
                </tr>


                <tr>
                    <td colspan="2">
                        <h3>B. Data Tempat Tinggal</h3>
                    </td>
                </tr>

                <tr>
                    <td> Alamat </td>
                    <td>: {{ $formulir->address }}</td>
                </tr>



                <tr>
                    <td colspan="2">
                        <h3>C. Data Keluarga</h3>
                    </td>
                </tr>

                <tr>
                    <td colspan="2"> <b class="sub">1. Kepala Keluarga</b></td>
                </tr>


                <tr>
                    <td colspan="2"> <b class="sub"> Ayah</b></td>
                </tr>
                <tr>
                    <td> Nama Ayah </td>
                    <td>: {{ $formulir->nama_ayah }}</td>
                </tr>
                <tr>
                    <td> Pekerjaan Ayah </td>
                    <td>: {{ $formulir->kerja_ayah }}</td>
                </tr>
                <tr>
                    <td> Pendidikan Ayah </td>
                    <td>: {{ $formulir->pend_akhiri }}</td>
                </tr>


                <tr>
                    <td colspan="2"> <b class="sub">Ibu</b></td>
                </tr>
                <tr>
                    <td> Nama Ibu </td>
                    <td>: {{ $formulir->nama_ibu }}</td>
                </tr>
                <tr>
                    <td> Pekerjaan Ibu </td>
                    <td>: {{ $formulir->kerja_ibu }}</td>
                </tr>
                <tr>
                    <td> Pendidikan Ibu </td>
                    <td>: {{ $formulir->pend_akhiri }}</td>
                </tr>
            </table>
        </div>

        <table class="table table-bordered">
            <thead class="thead">
                <tr>
                    <th scope="col">Nilai tes SKD :</th>
                    <th scope="col">Nilai Tes Wawancara::</th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <td>{{ $formulir->nilai1 }}</td>

                    <td>{{ $formulir->nilai2 }}</td>
                </tr> --}}

                <tr>
                    @if (!$formulir->nilai1)

                        <td> Kamu Belum Tes</td>
                    @else

                        <td> {{ $formulir->nilai1 }}</td>

                    @endif


                    @if (!$formulir->nilai2)

                        <td> Kamu Belum Tes</td>
                    @else

                        <td> {{ $formulir->nilai2 }}</td>

                    @endif

                </tr>
                <tr>
                    @if ($formulir->nilai1 + $formulir->nilai2 >= 160)
                        <th>status :</th>
                        <td> <span class="badge bg-success"> <i class="fas fa-check">lolos </i></span></td>
                    @elseif($formulir->nilai1 + $formulir->nilai2 < 160 && $formulir->nilai1
                            + $formulir->nilai1 > 0) <th>status :</th>
                            <td> <span class="badge bg-danger"> <i class="fas fa-history">Belum Lolos</i></span></td>
                        @elseif($formulir->nilai1 + $formulir->nilai2 == 0)
                            <th>status :</th>
                            <td> <span class="badge bg-warning"><i class="fas fa-history">Pending</i></span></td>
                    @endif

                    {{-- <th>Status :</th>
                    <td>{{ $formulir->status }}</td> --}}

                </tr>

            </tbody>

        </table>
    </div>
</body>

</html>
