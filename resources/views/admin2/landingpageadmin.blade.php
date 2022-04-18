@extends('admin2.sidebar')

@section('title')
<title>Home</title>
<link rel="icon" href="{{asset('assets/img/1.png')}}"/>
@endsection

@section('list')

<div class="text-center mt-2">
    <h1 style="color: #D3CFCF; font-family:poppins;">Welcome, {{Auth::user()->nama}}!</h1>
    <h1 style="color: #D3CFCF; font-family:poppins;">Start to manage the event and user</h1>
    <img src="{{asset('assets/img/admin.png')}}" style="width:300px; height: 300px;" class="center-block" alt="">
</div>
<section class="p-1">
    <div class="container">
        <div class="row text-center">   
            @can('admin')
            <div class="col-md">
                <div class="card bg-primary text-light">
                    <div class="card-body text-center">
                        <div class="h3">
                            <i class="bi bi-people"></i>
                        </div>
                        <h3 class="card-title" style=" font-family:poppins;">
                            Users
                        </h3>
                        <h1 style="font-family:poppins;">{{$user}}</h1>
                    </div>
                </div>
            </div>
            @endcan
            <div class="col-md">
                <div class="card bg-primary text-light">
                    <div class="card-body text-center">
                        <div class="h3">
                            <i class="bi bi-calendar3-event"></i>
                        </div>
                        <h3 class="card-title" style="font-family:poppins;">
                            Events
                        </h3>
                        <h1 style="font-family:poppins;">{{$event}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-primary text-light">
                    <div class="card-body text-center">
                        <div class="h3">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3 class="card-title" style="font-family:poppins;">
                            Cities
                        </h3>
                        <h1 style="font-family:poppins;">{{$city}}</h1>
                    </div>
                </div>
            </div>
            @can('admin')
            <div class="col-md">
                <div class="card bg-primary text-light">
                    <div class="card-body text-center">
                        <div class="h3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ticket" viewBox="0 0 16 16">
                                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z" />
                            </svg>
                        </div>
                        <h3 class="card-title" style="font-family:poppins;">
                            Checkouts
                        </h3>
                        <h1 style="font-family:poppins;">{{$checkout}}</h1>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
</section>
@endsection