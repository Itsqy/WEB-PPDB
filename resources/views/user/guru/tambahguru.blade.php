@extends('user.template')
@section('content')

    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Starter Page</a>
                    </li>
                </ul>
            </div>
            <div class="card-header">

            </div>
            <div class="card-body">
                <form action="{{ route('guru.store') }}" method="post">
                    @csrf
                    <b style="font-size: 15px;">Tambah User Guru</b>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">nama :</label>
                        <input type="text" name="name" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">email :</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="form-group">

                        <label for="exampleFormControlSelect1">Peran :</label>
                        <select name="role" class="form-control" id="exampleFormControlSelect1">
                            <option value="Guru">Guru</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">password :</label>
                        <input type="password" name="password" class="form-control" id="tugas"
                            placeholder="Masukin huruf awal nya Kapital yahh">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">tambah</button>
                </form>

            </div>
        </div>
    </div>

@endsection
