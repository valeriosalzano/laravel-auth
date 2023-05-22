@extends('layouts.app')

@section('content')
    <h1 class="display-3 text-center my-3">
        Admin Page
    </h1>

    <div class="container-fluid">
        <div class="row">

            <div class="flex-shrink-0 p-3 col-3">
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link active" aria-current="page">
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            List
                        </button>
                        <div class="collapse ps-3" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li>
                                    <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                        First
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                        Second
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                        Third
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                        Fourth
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-9">
                @yield('admin-content')
            </div>

        </div>
    </div>
@endsection
