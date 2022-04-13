<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>\
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wisata</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="tambahwisata.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/tambahwisata.css')}}">

</head>

<body>
    <div class="container">
        <h1><b>Form Add Event</b></h1>
        <form method="POST" action="/{{ $action }}">
            @csrf
            <div class="card-tambah-wisata">
                <div class="wrapper-tambah-wisata row">
                    <div class="preview-tambah-wisata text-center justify-content-center" id="preview-tambah-wisata">


                    </div>

                    {{-- form mulai --}}
                    <div class="details-tambah-wisata">
                        <div class="col-position-tambah-wisata">
                            <label for="">Event Name</label><br>
                            <input class="@error('nama') is-invalid @enderror" type="text" name="nama" id="pos-edit" value="{{ isset($event)?$event->nama:'' }}">
                        </div>
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <br>

                        <div class="col-position-tambah-wisata">
                            <label for="">Date</label><br>
                        </div>


                        <div class="date-input-tambah-wisata">
                            <input class="@error('tanggal_mulai') is-invalid @enderror" type="date" name="tanggal_mulai" id="date1" value="{{ isset($event)?$event->tanggal_mulai:'' }}">
                            @error('tanggal_mulai')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <input class="@error('tanggal_berakhir') is-invalid @enderror" type="date" name="tanggal_berakhir" id="date2" style="margin-left: 65px;" value="{{ isset($event)?$event->tanggal_berakhir:'' }}">
                            @error('tanggal_berakhir')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>

                        <div class="col-position-tambah-wisata">
                            <label for="">Time</label><br>
                        </div>
                        <div class="time-input-tambah-wisata">
                            <input class="@error('waktu_event') is-invalid @enderror" type="time" name="waktu_event" id="time1" value="{{ isset($event)?$event->waktu_event:'' }}">
                            @error('waktu_event')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror


                            <input class="@error('jam_tutup') is-invalid @enderror" type="time" name="jam_tutup" id="time2" style="margin-left: 65px;">
                            @error('jam_tutup')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div><br>

                        <div class="col-position-tambah-wisata">
                            <label for="">Location</label><br>
                            <input class="@error('lokasi') is-invalid @enderror" type="text" name="lokasi" id="pos-edit" value="{{ isset($event)?$event->lokasi:'' }}">
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
                        <select class="form-select @error('kota') is-invalid @enderror" name="kota" style="width:200px; height:45px; padding:5 10; border-radius:25px; border: 1px solid #57C2B8; " aria-label="Default select example">
                            <option selected>-</option>
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


                <input type="file" id="image_upload" name="image_upload" accept="image/png, image/jpg">
                <br>
                <div class="description-title-tambah-wisata">
                    <b>Description</b><br>
                    <textarea class="@error('deskripsi') is-invalid @enderror" name="deskripsi" id="text-desc-tambah-wisata" cols="30" rows="10" required>{{ isset($event)?$event->deskripsi:'' }}</textarea>
                </div>
                @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="tambah-kategori-wisata">
                <div class="title-tambah-kategori-wisata">
                    <b>Add Event Category</b><br><br>
                    <div class="col-position-tambah-wisata">
                        <label for="">Category Name</label><br>
                        <input class="@error('nama_kategori') is-invalid @enderror" type="text" name="nama_kategori" id="pos-edit" value="{{ isset($event)?$event->nama_kategori:'' }}">
                        <button type="submit" class="btn-add-category"><b>Add</b></button>
                    </div>
                    @error('nama_kategori')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                </div>
            </div>

            <div class="tambah-tiket-wisata" style="margin-top: 50px;">

                <div class="title-tambah-tiket-wisata">
                    <b>Add Detail Ticket</b><br><br>
                    <label for="">Category ID</label><br>
                    <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id" style="width:200px; height:45px; padding:5 10; border-radius:25px; border: 1px solid #57C2B8; " aria-label="Default select example">
                        <option selected>-</option>
                        <!-- @foreach ($cities as $city)
                        <option value="{{$city->name}}">{{$city->name}}</option>
                        @endforeach -->

                    </select>
                    @error('kategori_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <br>
                    <br>
                    <div class="col-position-tambah-wisata">
                        <label for="">Ticket Name</label><br>
                        <input class="@error('nama_tiket') is-invalid @enderror" type="text" name="nama_tiket" id="pos-edit" value="{{ isset($event)?$event->nama_tiket:'' }}">
                    </div>
                    @error('nama_tiket')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <div class="col-position-tambah-wisata">
                        <label for="">Ticket Price</label><br>
                        <input class="@error('harga_tiket') is-invalid @enderror" type="text" name="harga_tiket" id="pos-edit" value="{{ isset($event)?$event->harga_tiket:'' }}">
                    </div>
                    @error('harga_tiket')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <div class="col-position-tambah-wisata">
                        <label for="">Ticket Description</label><br>
                        <textarea class="@error('deskripsi_tiket') is-invalid @enderror" name="deskripsi_tiket" id="text-desc-tambah-wisata" cols="30" rows="10" required>{{ isset($event)?$event->deskripsi_tiket:'' }}</textarea>
                    </div>
                    @error('deskripsi_tiket')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>

                </div>

            </div>

            <div class="btn-disc-save-tambah-wisata">
                <button type="submit" class="save-tambah-wisata"><b>Submit</b></button>
            </div>
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