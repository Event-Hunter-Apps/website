<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Event</title>
    <link rel="icon" href="{{asset('assets/img/1.png')}}"/>
    

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="tambahwisata.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/tambahwisata.css')}}">

</head>

<body>
    <div class="container">
        <h1>
            <a href="/admin/events/">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left" viewBox="16 0 16 16" style="color: #57c2b8; width: 150px">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
            </a>
        </h1>

        <h1><b>Form Edit Event</b></h1>
        <form method="POST" action="/{{ $action }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="{{ $method }}" />
            <div class="card-tambah-wisata">
                <div class="wrapper-tambah-wisata row">
                    <div class="preview-tambah-wisata text-center justify-content-center" id="preview-tambah-wisata">
                        <img class="tempat-img" id="tempat-img" src="{{$event->image}}" alt="No Image">

                    </div>

                    {{-- form mulai --}}
                    <div class="details-tambah-wisata">
                        <div class="col-position-tambah-wisata">
                            <label for="">Event Name</label><br>
                            <input class="@error('nama') is-invalid @enderror" type="text" name="nama" id="pos-edit" value="{{ isset($event)?$event->nama:old('nama') }}">
                        </div>
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <br>

                        <div class="col-position-tambah-wisata">
                            <label for="">Price</label><br>
                            <input class="@error('harga') is-invalid @enderror" type="text" name="harga" id="pos-edit" value="{{ isset($event)?$event->harga:old('harga') }}">
                        </div>
                        @error('harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <br>

                        <div class="col-position-tambah-wisata">
                            <label for="">Date</label><br>
                        </div>
                        <div class="date-input-tambah-wisata">
                            <input class="@error('tanggal_mulai') is-invalid @enderror" type="date" name="tanggal_mulai" id="date1" value="{{ isset($event)?$event->tanggal_mulai:old('tanggal_mulai') }}">
                            @error('tanggal_mulai')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <input class="@error('tanggal_berakhir') is-invalid @enderror" type="date" name="tanggal_berakhir" id="date2" style="margin-left: 65px;" value="{{ isset($event)?$event->tanggal_berakhir:old('tanggal_berakhir') }}">
                            @error('tanggal_berakhir')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>

                        <div class="col-position-tambah-wisata">
                            <label for="">Time</label><br>
                        </div>
                        <div class="time-input-tambah-wisata">
                            <input class="@error('jam_buka') is-invalid @enderror" type="time" name="jam_buka" id="time1" value="{{ isset($event)?$event->jam_buka:old('jam_buka') }}">
                            @error('waktu_event')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <input class="@error('jam_tutup') is-invalid @enderror" type="time" name="jam_tutup" id="time2" style="margin-left: 65px" ; value="{{ isset($event)?$event->jam_tutup:old('jam_tutup') }}">
                            @error('jam_tutup')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div><br>

                        <div class="col-position-tambah-wisata">
                            <label for="">Location</label><br>
                            <input class="@error('lokasi') is-invalid @enderror" type="text" name="lokasi" id="pos-edit" value="{{ isset($event)?$event->lokasi:old('lokasi') }}">
                            @error('lokasi')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <img src="assets/img/uil_location-pin-alt.svg" alt="">
                        </div> <br>

                        {{-- TAGGGGGGGG --}}
                        {{-- <ul class="tags-tambah-wisata">
                            <!-- <li class="tag-tambah-wisata">Fun Activities <img src="assets/img/radix-icons_cross-2.svg" alt=""></li>
                            <li class="tag-tambah-wisata">Explorer Indonesia <img src="assets/img/radix-icons_cross-2.svg" alt=""></li>
                            <li class="tag-tambah-wisata">Trip <img src="assets/img/radix-icons_cross-2.svg" alt=""></li> -->
                            <li class="tag-tambah-wisata"><img src="assets/img/radix-icons_cross-2.svg" alt="" style="transform: rotate(45deg);"></li>
                            <!-- <span class="tag-1-tambah-wisata">Fun Activities</span>
                                <span class="tag-2-tambah-wisata">Explorer Indonesia</span>
                                <span class="tag-3-tambah-wisata">Trip</span>
                                <span class="tag-4-tambah-wisata"></span> -->
                        </ul> --}}


                        <label for="">City</label>
                        <select class="form-select @error('kota') is-invalid @enderror" name="kota" style="width:200px; height:45px; padding:10px 38px; border-radius:25px; border: 1px solid #57C2B8; " aria-label="Default select example">
                            <option selected>{{ isset($event)?$event->kota:'' }}</option>
                            @foreach ($cities as $city)
                            <option value="{{$city->name}}">{{$city->name}}</option>
                            @endforeach

                        </select>
                        @error('kota')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="description-tambah-wisata" style="margin-top: 0px;">
                <input class="@error('image_upload') is-invalid @enderror" type="file" id="image_upload" name="image_upload" value="{{old('image_upload')}}">
                @error('image_upload')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <div class="description-title-tambah-wisata">
                    <b>Description</b><br>
                    <textarea class="@error('deskripsi') is-invalid @enderror" name="deskripsi" id="text-desc-tambah-wisata" cols="30" rows="10" required>{{ isset($event)?$event->deskripsi:'' }}</textarea>
                </div>
                @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex">

                <div class="btn-disc-save-tambah-wisata">
                    <button type="submit" class="save-tambah-wisata"><b>Submit</b></button>
                </div>

                <div class="btn-disc-save-tambah-wisata">
                    <b><a class="save-tambah-wisata" style="cursor:pointer" onclick="location.href='/admin/events/{{$event->id}}/tikets'">View All Tickets</a></b>
                </div>
            </div>

        </form>
        <br>
        <br>
        <form method="post" action="/admin/events/{{ $event->id }}" style="display:inline" onsubmit="return confirm('Yakin hapus?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>

    </div>

    <script>
        const selectedEW = document.querySelector(".selected-tambah-wisata");
        const optionContainerEW = document.querySelector(".option-container-tambah-wisata");

        const optionListEW = document.querySelectorAll(".option-tambah-wisata");
        selectedEW.addEventListener("click", () => {
            optionContainerEW.classList.toggle("active");
        })

        optionListEW.forEach(o => {
            o.addEventListener("click", () => {
                selectedEW.innerHTML = o.querySelector("label").innerHTML;
                optionContainerEW.classList.remove("active");
            })
        })
    </script>



    <script src="{{asset('assets/js/upload_image.js')}}"></script>

</body>

</html>