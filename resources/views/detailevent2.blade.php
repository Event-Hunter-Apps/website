<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wisata</title>

</head>

<body>
    <div class="container">
        <p>{{$event->nama}}</p>
        <p>{{$event->tanggal_mulai}}</p>
        <p>{{$event->tanggal_berakhir}}</p>
        <p>{{$event->jam_buka}}</p>
        <p>{{$event->jam_tutup}}</p>
        <p>{{$event->lokasi}}</p>
        <p>{{$event->kota}}</p>
        <p>{{$event->deskripsi}}</p>
    </div>
    <a class="btn btn-primary" href="/events/2/choose-tiket">Check Availability</a>

</body>

</html>