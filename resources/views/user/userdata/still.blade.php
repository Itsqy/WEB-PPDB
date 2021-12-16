@extends('user.template')

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>

            </div>

            <div class="row justify-content-center align-items-center mb-1">
                <div class="container" data-aos="fade-up">
                    <div class="card-body card-danger">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <p>{{ $user->name }} Belom daftar ! <span class="badge bg-warning"> <i
                                            class="fas fa-history"> Yok ke </i> <a href="/formulir"> Formulir </a></span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>


@endsection
