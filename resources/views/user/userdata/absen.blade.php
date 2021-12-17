@extends('user.template')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
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
                                            <th>photo</th>


                                            <th>nama</th>
                                            <th>tanda tangan</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        @foreach ($formulir as $form)
                                            <tr>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>
                                                            <img src="{{ $form->photo }}" alt=""
                                                                style="max-width: 100px !important; border-radius:5px;">

                                                        </td>
                                                        <td>{{ $form->full_name }}</td>
                                                        <td>


                                                        </td>


                                                    </tr>
                                                </tbody>
                                            </tr>
                                        @endforeach
                                </table>

                                <td>
                                    <div class="form-button-action">
                                        {{-- <a href="{{ route('show.berkas', $form->id) }}"
                                            class="btn btn-primary"><i class="fa fa-eye">
                                                detail </i></a> --}}


                                        <a class=" btn btn-primary" href="{{ route('generateabsen') }}" target="blank"> <i
                                                class="fa fa-download"></i>download</a>



                                    </div>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

@endsection
