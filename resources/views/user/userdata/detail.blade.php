@extends('user.template')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Detail</h4>

            </div>
            <div class="card-header">
                Detail formulir
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Nomer Registerasi : </th>
                        <td>REG-2021-{{ str_pad($formulir->id, 5, '0', STR_PAD_LEFT) }}</td>
                    </tr>
                    <tr>
                        <th>nama pendaftar : </th>
                        <td>{{ $formulir->full_name }}</td>
                    </tr>
                    <tr>
                        <th>Birthday: </th>
                        <td>{{ $formulir->place }},
                            {{ \Carbon\Carbon::parse($formulir->birthday)->format('d - F - Y') }}</td>
                    </tr>
                    <tr>
                        <th>nisn: </th>
                        <td> {{ $formulir->nisn }}</td>
                    </tr>

                    <tr>
                        <th>agama : </th>
                        <td> {{ $formulir->agama }}</td>
                    </tr>

                    <tr>
                        <th>anak_ke : </th>
                        <td> {{ $formulir->anak_ke }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah saudara : </th>
                        <td> {{ $formulir->jml_saudara }}</td>
                    </tr>
                    <tr>
                        <th>Alamat : </th>
                        <td> {{ $formulir->address }}</td>
                    </tr>
                    <tr>
                        <th>Sekolah Asal : </th>
                        <td> {{ $formulir->school }}</td>
                    </tr>
                    <tr>
                        <th>Gender : </th>
                        <td> {{ $formulir->gender }}</td>
                    </tr>
                    <tr>
                        <th>TInggal Dengan : </th>
                        <td> {{ $formulir->tinggal_dengan }}</td>
                    </tr>
                    <tr>
                        <th> RIwayat Penyakit : </th>
                        <td> {{ $formulir->penyakit }}</td>
                    </tr>
                    <tr>
                        <th>nama Ayah : </th>
                        <td> {{ $formulir->nama_ayah }}</td>
                    </tr>
                    <tr>
                        <th>nama Ibu : </th>
                        <td> {{ $formulir->nama_ibu }}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan Ayah : </th>
                        <td> {{ $formulir->kerja_ayah }}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan Ibu : </th>
                        <td> {{ $formulir->kerja_ibu }}</td>
                    </tr>
                    <tr>
                        <th>Pendidikan Ayah : </th>
                        <td> {{ $formulir->pend_akhira }}</td>
                    </tr>
                    <tr>
                        <th>Pendidikan Ibu : </th>
                        <td> {{ $formulir->pend_akhiri }}</td>
                    </tr>
                    <tr>
                        <th>Prestasi : </th>
                        <td> {{ $formulir->prestasi }}</td>
                    </tr>
                    <tr>
                        <th>beri nilai : </th>
                        <td>
                            <form action="{{ route('update.berkas', $formulir->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-group">

                                    <input type="text" name="nilai1" value=" {{ $formulir->nilai1 }}"
                                        class="form-control">
                                </div>
                                <div class="form-group">

                                    <input type="text" name="nilai2" value=" {{ $formulir->nilai2 }}"
                                        class="form-control">
                                </div>
                                {{-- <div class="form-group">

                                    <input type="text" name="status " value=" {{ $formulir->nilai2 }}"
                                        class="form-control">
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="exampleFormControlSelect1">status :</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                        @if ($formulir->nilai1 + $formulir->nilai2 >= 160)
                                            <option value="1">Lolos</option>
                                        @elseif($formulir->nilai1 + $formulir->nilai2 <= 160) <option value="2">Belum
                                                Lolos</option>
                                            @else <option value="3">
                                                    Pending</option>
                                        @endif



                                    </select>
                                </div> --}}
                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-success">
                                    <i class="fa flaticon-success "></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th>download file : </th>
                        <td>
                            <form action="{{ route('download', $formulir->id) }}">


                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger">
                                    <i class="fa fa-download"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>



@endsection
