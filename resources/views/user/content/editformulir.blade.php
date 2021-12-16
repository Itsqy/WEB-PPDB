@extends('user.template')
@section('content')
    <form action="{{ route('updata', $formulir->id) }}" method="post" enctype="multipart/form-data" data-aos="zoom-out">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Form Daftar</div>
                    </div>
                    <!-- allert succes -->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        {{-- 1.Siswa --}}
                        <b style="font-size: 15px;">1.Form Siswa</b>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto Siswa 3x4 :</label>

                            <input type="file" value="{{ $formulir->photo }}" name="photo" class="form-control-file"
                                id="exampleFormControlFile1">
                            <img src="{{ url('storage/', $formulir->photo) }}" alt=""
                                style="max-width: 100px !important; border-radius:5px; mt-5">

                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">Nama Lengkap :</label>
                            <input type="text" value="{{ $formulir->full_name }}" name="full_name" class="form-control"
                                id="namalengkap" placeholder="Enter fullname...">
                            @if ($errors->has('full_name'))
                                <span class="text-danger">{{ $errors->first('full_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">NISN :</label>
                            <input type="text" value="{{ $formulir->nisn }}" name="nisn" class="form-control"
                                id="namalengkap" placeholder="Enter NISN...">
                            @if ($errors->has('nisn'))
                                <span class="text-danger">{{ $errors->first('nisn') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">asal sekolah :</label>
                            <input type="text" value="{{ $formulir->school }}" name="school" class="form-control"
                                id="namalengkap" placeholder="Enter fullname...">
                            @if ($errors->has('school'))
                                <span class="text-danger">{{ $errors->first('school') }}</span>
                            @endif
                        </div>

                        <div class="form-check">
                            <label>Jenis Kelamin :</label><br />
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" value="{{ $formulir->gender }}"
                                    name="gender" value="laki" checked="">
                                <span class="form-radio-sign">Laki - Laki</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" value="{{ $formulir->gender }}"
                                    name="gender" value="perempuan">
                                <span class="form-radio-sign">Perempuan</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="tp2">tempat Lahir :</label>
                            <input type="string" value="{{ $formulir->place }}" name="place" class="form-control"
                                id="tp2" placeholder="tempat Lahir...">
                            @if ($errors->has('place'))
                                <span class="text-danger">{{ $errors->first('place') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="tp2">Tanggal Lahir :</label>
                            <input type="date" value="{{ $formulir->birthday }}" name="birthday" class="form-control"
                                placeholder="Tanggal Lahir...">
                            @if ($errors->has('birthday'))
                                <span class="text-danger">{{ $errors->first('birthday') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kewarganegaraan / Agama :</label>
                            <select value="{{ $formulir->agama }}" name="agama" class="form-control"
                                id="exampleFormControlSelect1">
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="katolik">katolik</option>
                                <option value="buddha">buddha</option>
                                <option value="konghucu">konghucu</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="ank">Anak Ke- :</label>
                            <input type="number" value="{{ $formulir->anak_ke }}" name="anak_ke" class="form-control"
                                id="ank" placeholder="anak ke berapa...">
                            @if ($errors->has('anak_ke'))
                                <span class="text-danger">{{ $errors->first('anak_ke') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Jumlah Saudara :</label><br>
                            <div class="col-md-9 p-0">
                                <input type="number" value="{{ $formulir->jml_saudara }}" name="jml_saudara"
                                    class="form-control input-full" id="inlineinput" placeholder="Enter Input">
                                @if ($errors->has('jml_saudara'))
                                    <span class="text-danger">{{ $errors->first('jml_saudara') }}</span>
                                @endif
                            </div>

                        </div>

                        {{-- 2. Keterangan tmpt tinggal --}}
                        <b style="margin-left: 10px;font-size: 15px;">2.Keterangan Tempat Tinggal</b>
                        <div class="form-group">
                            <label for="almtrm">Alamat Rumah :</label>
                            <input type="text" value="{{ $formulir->address }}" name="address" class="form-control"
                                id="almtrm" placeholder="alamat  lengkap">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="tlprmh">No. Telpon :</label>
                            <input type="number" value="{{ $formulir->phone }}" name="phone" class="form-control"
                                id="tlprmh" placeholder="...">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-check">
                            <label>Tinggal Dengan :</label><br />
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" value="{{ $formulir->tinggal_dengan }}"
                                    name="tinggal_dengan" value="orangtua" checked="">
                                <span class="form-radio-sign">Orang Tua</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" value="{{ $formulir->tinggal_dengan }}"
                                    name="tinggal_dengan" value="asrama">
                                <span class="form-radio-sign">Asrama</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" value="{{ $formulir->tinggal_dengan }}"
                                    name="tinggal_dengan" value="saudara">
                                <span class="form-radio-sign">Saudara</span>
                            </label>
                        </div>
                        {{-- 3.Keterangan Kesehatan --}}
                        <b style="margin-left: 10px;font-size: 15px;">3.Keterangan Kesehatan</b>
                        <div class="form-group">
                            <label for="pykt">Riwayat Penyakit(namaPenyakit/kapan) :</label>
                            <input type="text" value="{{ $formulir->penyakit }}" name="penyakit" class="form-control"
                                id="pykt" placeholder="jika tidak maka isi strip...">
                            @if ($errors->has('penyakit'))
                                <span class="text-danger">{{ $errors->first('penyakit') }}</span>
                            @endif
                        </div>
                        {{-- 4.Data OrangTua/Wali --}}
                        <b style="margin-left: 10px;font-size: 15px;">4.Data OrangTua/Wali</b><br>
                        <b style="margin-left: 13px;font-size: 13px;">A. Data Ayah</b>
                        {{-- Data Ayah --}}
                        <div class="form-group">
                            <label for="nmyh">Nama Ayah :</label>
                            <input type="text" value="{{ $formulir->nama_ayah }}" name="nama_ayah" class="form-control"
                                id="nmyh" placeholder="masih ada/almarhum">
                            @if ($errors->has('nama_ayah'))
                                <span class="text-danger">{{ $errors->first('nama_ayah') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="krjyh">Pekerjaan :</label>
                            <input type="text" value="{{ $formulir->kerja_ayah }}" name="kerja_ayah"
                                class="form-control" id="krjyh" placeholder="...">
                            @if ($errors->has('kerja_ayah'))
                                <span class="text-danger">{{ $errors->first('kerja_ayah') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pdtrkh">Pendidikan Terakhir :</label>
                            <input type="text" value="{{ $formulir->pend_akhira }}" name="pend_akhira"
                                class="form-control" id="pdtrkh" placeholder="...">
                            @if ($errors->has('pend_akhira'))
                                <span class="text-danger">{{ $errors->first('pend_akhira') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="nohape">No. HP/WA :</label>
                            <input type="number" value="{{ $formulir->no_telpayah }}" name="no_telpayah"
                                class="form-control" id="nohape" placeholder="...">
                            @if ($errors->has('no_telpayah'))
                                <span class="text-danger">{{ $errors->first('no_telpayah') }}</span>
                            @endif
                        </div>
                        <b style="margin-left: 13px;font-size: 13px;">B. Data Ibu</b>
                        {{-- Data Ibu --}}
                        <div class="form-group">
                            <label for="nmibu">Nama Ibu :</label>
                            <input type="text" value="{{ $formulir->nama_ibu }}" name="nama_ibu" class="form-control"
                                id="nmibu" placeholder="masih ada/almarhum">
                            @if ($errors->has('nama_ibu'))
                                <span class="text-danger">{{ $errors->first('nama_ibu') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="krjyh">Pekerjaan :</label>
                            <input type="text" value="{{ $formulir->kerja_ibu }}" name="kerja_ibu" class="form-control"
                                id="krjyh" placeholder="...">
                            @if ($errors->has('kerja_ibu'))
                                <span class="text-danger">{{ $errors->first('kerja_ibu') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pdibu">Pendidikan Terakhir :</label>
                            <input type="text" value="{{ $formulir->pend_akhiri }}" name="pend_akhiri"
                                class="form-control" id="pdibu" placeholder="...">
                            @if ($errors->has('pend_akhiri'))
                                <span class="text-danger">{{ $errors->first('pend_akhiri') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="nohapeibu">No. HP/WA :</label>
                            <input type="number" value="{{ $formulir->no_telpibu }}" name="no_telpibu"
                                class="form-control" id="nohapeibu" placeholder="...">
                            @if ($errors->has('no_telpibu'))
                                <span class="text-danger">{{ $errors->first('no_telpibu') }}</span>
                            @endif
                        </div>




                        {{-- Nilai - Nilai --}}
                        <b style="margin-left: 10px;font-size: 15px;">4.Berkas Yang Harus Di Upload</b><br><br>
                        {{-- 1.ijazah --}}

                        <div class="form-group">
                            <label for="exampleFormControlFile1">File Ijazah/SKHUN</label>
                            <p>*bisa di minta sbelum pembagian ijazah untuk SKHU</p>
                            <input type="file" value="{{ $formulir->iijazah }}" name="ijazah" class="form-control-file"
                                id="exampleFormControlFile1" placeholder="FIle Harus di isi Kembali">
                            <img src="{{ url('storage/', $formulir->ijazah) }}" alt=""
                                style="max-width: 100px !important; border-radius:5px; mt-5">
                            @if ($errors->has('ijazah'))
                                <span class="text-danger">{{ $errors->first('ijazah') }}</span>
                            @endif
                        </div>
                        {{-- 2.Rapot --}}

                        <div class="form-group">
                            <label for="exampleFormControlFile1">File rapot</label>
                            <input type="file" value="{{ $formulir->rapot }}" name="rapot" class="form-control-file"
                                id="exampleFormControlFile1" placeholder="FIle Harus di isi Kembali">
                            <img src="{{ url('storage/', $formulir->rapot) }}" alt=""
                                style="max-width: 100px !important; border-radius:5px; mt-5">
                            @if ($errors->has('rapot'))
                                <span class="text-danger">{{ $errors->first('rapot') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="prsts">Prestasi Yang Pernah Diraih :</label>
                            <input type="text" value="{{ $formulir->prestasi }}" name="prestasi" class="form-control"
                                id="prsts" placeholder="...">

                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">File Sertifikat</label>
                            <input type="file" value="{{ $formulir->file_prestasi }}" name="file_prestasi"
                                class="form-control-file" id="exampleFormControlFile1"
                                placeholder="FIle Harus di isi Kembali">
                            <img src="{{ url('storage/', $formulir->file_prestasi) }}" alt=""
                                style="max-width: 100px !important; border-radius:5px; mt-5">

                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
