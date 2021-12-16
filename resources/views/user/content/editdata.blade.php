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
                        <b style="font-size: 15px;">1.Form Data Siswa</b>
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

                        {{-- 1.ijazah --}}

                        <div class="form-group">
                            <label for="exampleFormControlFile1">File Ijazah</label>
                            <input type="file" value="{{ $formulir->iijazah }}" name="ijazah" class="form-control-file"
                                id="exampleFormControlFile1" placeholder="FIle Harus di isi Kembali">
                            <img src="{{ url('storage/', $formulir->ijazah) }}" alt=""
                                style="max-width: 100px !important; border-radius:5px; mt-5">
                            @if ($errors->has('ijazah'))
                                <span class="text-danger">{{ $errors->first('ijazah') }}</span>
                            @endif
                        </div>



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
