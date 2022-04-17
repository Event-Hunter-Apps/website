<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
        .bg-primary{
            background-color: #32B0C7!important;
        }
        .btn{
            background-color: #ffffff;
        }
        .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
            background-color: #ffffff !important;
        }
        .h3, .h1{
            font-family:poppins;
        }
    </style>
</head>
<body>
    <div class="text-center mt-5">
        <h1 style="color: #D3CFCF; font-family:poppins;">Welcome, {{Auth::user()->nama}}!</h1>
        <h1 style="color: #D3CFCF; font-family:poppins;">Start to manage the event and user</h1>
        <img src="{{asset('assets/img/admin.png')}}" style="width:450px; height: 450px;" class="center-block" alt="">
    </div>
    <section class="p-1">
        <div class="container">
            <div class="row text-center">   
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
                            <a href="/admin/users" class="btn mt-3" style="color: #BABABA; font-family:poppins;">view</a>
                            
                        </div>
                    </div>
                </div>
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
                            <a href="admin/events" class="btn mt-3" style="color: #BABABA; font-family:poppins;">view</a>
                            
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
                            <a href="admin/cities" class="btn mt-3" style="color: #BABABA; font-family:poppins;">view</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-primary text-light">
                        <div class="card-body text-center">
                            <div class="h3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ticket" viewBox="0 0 16 16">
                                    <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>
                                </svg>
                            </div>
                            <h3 class="card-title" style="font-family:poppins;">
                                Checkouts
                            </h3>
                            <h1 style="font-family:poppins;">{{$checkout}}</h1>
                            <a href="/admin/checkouts" class="btn mt-3" style="color: #BABABA; font-family:poppins;">view</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>