<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Wisata</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="tambahwisata.css"> -->
    <link rel="stylesheet" href="assets/css/tambahwisata.css">

</head>

<body>

    <div class="container">
        <form action="/add2" method="POST">
            @csrf
            <div class="card-tambah-wisata">
                <div class="wrapper-tambah-wisata row">
                    <div class="preview-tambah-wisata">
                        <div class="preview-pic-tambah-wisata tab-content">
                            <div class="tab-pane active" id="pic-1">
                                <!-- <img src="assets/img/Rectangle 43.png" /> -->
                            </div>
                            <div class="tab-pane" id="pic-2">
                                <!-- <img src="assets/img/Rectangle 49.png" /> -->
                            </div>
                            <div class="tab-pane" id="pic-3">
                                <!-- <img src="assets/img/Rectangle 50.png" /> -->
                            </div>
                        </div>
                        <Button class="add-img-tambah-wisata"><img src="assets/img/akar-icons_camera.svg" alt="" style="width: 40;"></Button>
                        <ul class="preview-thumbnail-tambah-wisata nav nav-tabs">
                            <li>
                                <a data-target="#pic-1" data-toggle="tab"><img style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                                <Button class="rmv-btn-tambah-wisata"><img src="assets/img/radix-icons_cross-2-white.svg" alt=""></Button>
                            </li>
                            <li>
                                <a data-target="#pic-2" data-toggle="tab"><img style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                                <Button class="rmv-btn-tambah-wisata"><img src="assets/img/radix-icons_cross-2-white.svg" alt=""></Button>
                            </li>
                            <li>
                                <a data-target="#pic-3" data-toggle="tab"><img style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                                <Button class="rmv-btn-tambah-wisata"><img src="assets/img/radix-icons_cross-2-white.svg" alt=""></Button>
                            </li>
                        </ul>

                    </div>
                    <div class="details-tambah-wisata">
                        <div class="col-position-tambah-wisata">
                            <label for="">Event Name</label><br>
                            <input type="text" name="nama" id="pos-edit" value="">
                        </div>
                        <br>
                        <div class="col-position-tambah-wisata">
                            <label for="">Price</label><br>
                            <input type="text" name="harga" id="pos-edit" value="">
                        </div>
                        <br>

                        <div class="date-input-tambah-wisata">
                            <input type="date" name="tanggal_mulai" id="date1">
                            <span class="line-date-tambah-wisata"></span>
                            <span><input type="date" name="tanggal_berakhir" id="date2" style="margin-left: 65px;"></span>
                        </div><br>
                        <div class="time-input-tambah-wisata">

                            <input type="time" name="jam_buka" id="time1">
                            <span class="line-time-tambah-wisata"></span>
                            <span><input type="time" name="jam_tutup" id="time2" style="margin-left: 65px;"></span>
                        </div> <br>
                        <div class="col-position-tambah-wisata">
                            <label for="">Location</label><br>
                            <input type="text" name="lokasi" id="pos-edit" value="">
                            <img src="assets/img/uil_location-pin-alt.svg" alt="">
                        </div> <br>
                        <ul class="tags-tambah-wisata">
                            <!-- <li class="tag-tambah-wisata">Fun Activities <img src="assets/img/radix-icons_cross-2.svg" alt=""></li>
                            <li class="tag-tambah-wisata">Explorer Indonesia <img src="assets/img/radix-icons_cross-2.svg" alt=""></li>
                            <li class="tag-tambah-wisata">Trip <img src="assets/img/radix-icons_cross-2.svg" alt=""></li> -->
                            <li class="tag-tambah-wisata"><img src="assets/img/radix-icons_cross-2.svg" alt="" style="transform: rotate(45deg);"></li>
                            <!-- <span class="tag-1-tambah-wisata">Fun Activities</span>
                                <span class="tag-2-tambah-wisata">Explorer Indonesia</span>
                                <span class="tag-3-tambah-wisata">Trip</span>
                                <span class="tag-4-tambah-wisata"></span> -->
                        </ul>


                        <label for="">City</label>
                        <select class="form-select" name="kota" style="width:200px; height:45px; padding:5 10; border-radius:25px; border: 1px solid #57C2B8; " aria-label="Default select example">
                            <option selected>-</option>
                            <option value="1">Jakarta</option>
                            <option value="2">Bandung</option>
                            <option value="3">Surabaya</option>
                            <option value="4">Semarang</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="description-tambah-wisata" style="margin-top: -30px;">
                <input type="file" id="file1" name="upload">
                <br>
                <div class="description-title-tambah-wisata">
                    <b>Description</b><br><br>
                    <textarea name="deskripsi" id="text-desc-tambah-wisata" cols="30" rows="10" required></textarea>
                </div>
            </div>

            <div class="btn-disc-save-tambah-wisata">
                <button type="submit" class="save-tambah-wisata"><b>Add</b></button>
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
</body>

</html>