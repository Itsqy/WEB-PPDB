@extends('user.template')
@section('content')
    <div class="content" data-aos="zoom-in">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">{{ $title }}</h4>
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
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">{{ $title }}</a>
                    </li>
                </ul>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $title }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table  table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>name</th>


                                            <th>gambar</th>
                                            <th>gambar</th>
                                            <th>gambar</th>
                                            <th>gambar</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        @foreach ($formulir as $form)
                                            <tr>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $form->full_name }}</td>


                                                        <td>
                                                            <img src="{{ url('storage/' . $form->photo) }}" alt=""
                                                                style="max-width: 100px !important; border-radius:5px;">

                                                        </td>
                                                        <td>
                                                            <img src="{{ url('storage/' . $form->ijazah) }}" alt=""
                                                                style="max-width: 100px !important; border-radius:5px;">

                                                        </td>
                                                        <td>
                                                            <img src="{{ url('storage/' . $form->rapot) }}" alt=""
                                                                style="max-width: 100px !important; border-radius:5px;">

                                                        </td>
                                                        <td>
                                                            <img src="{{ url('storage/' . $form->file_prestasi) }}" alt=""
                                                                style="max-width: 100px !important; border-radius:5px;">

                                                        </td>

                                                        <td>
                                                            <div class="form-button-action">
                                                                <a href="{{ route('show.berkas', $form->id) }}"
                                                                    class="btn btn-primary"><i class="fa fa-eye">
                                                                        detail </i></a>

                                                                <form action="{{ route('download', $form->id) }}">
                                                                    {{-- @csrf
                                                                        @method('DELETE') --}}
                                                                    <button type="submit" data-toggle="tooltip" title=""
                                                                        class="btn btn-link btn-danger">
                                                                        <i class="fa fa-download"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
