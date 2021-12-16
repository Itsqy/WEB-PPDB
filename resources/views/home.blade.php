@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                    @if (Auth::user()->role == 'Admin')
                        <div class="card-body"><a href="/dashboard">Ayo langsung Dashboard</a></div>
                    @else
                        <div class="card-body"><a href="{{ route('dashboard.create') }}">Ayo langsung dashboard</a>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
@endsection
