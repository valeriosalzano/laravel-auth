@extends('layouts.app')

@section('content')
    <h1 class="display-3 text-center my-3">
        Admin Page
    </h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @include('partials.sidebar')
            </div>
            
            <div class="col-9">
                @yield('admin-content')
            </div>

        </div>
    </div>
@endsection
