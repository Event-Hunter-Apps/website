@extends('template.master')

@section('body')
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/events" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-cart"></i> <span class="ms-1 d-none d-sm-inline">Events</span>
                        </a>
                    </li>

                    @can('admin')
                    <li class="nav-item">
                        <a href="/admin/users" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-people-fill"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                        </a>
                    </li>
                    @endcan

                    <li class="nav-item">
                        <a href="/admin/cities" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-building"></i> <span class="ms-1 d-none d-sm-inline">Cities</span>
                        </a>
                    </li>

                    @can('admin')
                    <li class="nav-item">
                        <a href="/admin/checkouts" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi bi-ticket-perforated"></i> <span class="ms-1 d-none d-sm-inline">Checkouts</span>
                        </a>
                    </li>
                    @endcan
                    
                </ul>

            </div>
        </div>
        <div class="col py-3">
            @yield('list')
        </div>
    </div>
</div>
@endsection