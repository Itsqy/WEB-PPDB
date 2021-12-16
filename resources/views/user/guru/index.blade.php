@extends('user.template')

@section('content')
    <div class="content" data-aos="zoom-in">
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
                <div class="card-header">
                    <a href="{{ route('guru.create') }}" class="btn btn-success">
                        <i class="fa fa-plus">
                            Add
                        </i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>no</th>
                            <th>nama Guru</th>
                            <th>role</th>
                            <th>action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($user as $u)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->role }}</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                <form action="{{ route('guru.destroy', $u->id) }}" method="POST"
                                    onsubmit="return confirm('hapus  {{ $u->name }} ? ')">
                                    @csrf
                                    @method('delete')



                                    {{-- buat edit --}}
                                    <a href="{{ route('guru.edit', $u->id) }}" class="btn btn-warning"><i
                                            class="fa fa-edit"></i> edit </a>
                                    {{-- button buat hapus --}}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> Hapus
                                        </i>
                                    </button>

                                </form>
                            </td>
                        </tr>


                        @endforeach
                        </tr>
                    </tbody>
                </table>
                {{-- PAGINATE --}}
                {{-- {{ $jabatan->appends(Request::all())->links() }} --}}
            </div>
        </div>
    </div>



@endsection
