<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Wisata</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tambahwisata.css">

</head>

<body>

    <div class="container">
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
                    <h2 class="product-title-tambah-wisata"><b>-<span><Button class="edit-place-tambah-wisata"><img src="assets/img/ant-design_edit-filled.svg" alt=""></Button></span>
</b></h2><br>
                    <h4 class="harga-tambah-wisata" style="margin-top: -10px;"><b>Rp 0 <span><Button class="edit-tarif-tambah-wisata"><img src="assets/img/ant-design_edit-filled.svg" alt=""></Button></span></b></h4>
                    <div class="date-input-tambah-wisata">

                        <input type="date" name="date-start" id="date1">
                        <span class="line-date-tambah-wisata"></span>
                        <span><input type="date" name="date-end" id="date2" style="margin-left: 65px;"></span>
                    </div><br>
                    <div class="time-input-tambah-wisata">
                        <input type="time" name="time-start" id="time1">
                        <span class="line-time-tambah-wisata"></span>
                        <span><input type="time" name="time-end" id="time2" style="margin-left: 65px;"></span>
                    </div> <br>
                    <div class="col-position-tambah-wisata">
                        <input type="text" name="pos-tambah-wisata" id="pos-edit" value="">
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

                    <div class="select-box-tambah-wisata">
                        <div class="option-container-tambah-wisata">
                            <div class="option-tambah-wisata">
                                <input type="radio" class="radio" id="aceh" name="category" />
                                <label for="aceh">Aceh</label>
                            </div>
                            <div class="option-tambah-wisata">
                                <input type="radio" class="radio" id="sumut" name="category" />
                                <label for="sumut">Medan</label>
                            </div>
                            <div class="option-tambah-wisata">
                                <input type="radio" class="radio" id="sumbar" name="category" />
                                <label for="sumbar">Padang</label>
                            </div>
                            <div class="option-tambah-wisata">
                                <input type="radio" class="radio" id="riau" name="category" />
                                <label for="riau">Riau</label>
                            </div>
                            <div class="option-tambah-wisata">
                                <input type="radio" class="radio" id="banten" name="category" />
                                <label for="banten">Banten</label>
                            </div>
                            <div class="option-tambah-wisata">
                                <input type="radio" class="radio" id="jkt" name="category" />
                                <label for="jkt">Jakarta</label>
                            </div>
                            <div class="option-tambah-wisata">
                                <input type="radio" class="radio" id="jabar" name="category" />
                                <label for="jabar">Bandung</label>
                            </div>
                            <div class="option-tambah-wisata">
                                <input type="radio" class="radio" id="jogja" name="category" />
                                <label for="jogja">Yogyakarta</label>
                            </div>
                        </div>
                        <div class="selected-tambah-wisata">
                            Pilih Kota
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-tambah-wisata" style="margin-top: -30px;">
            <div class="description-title-tambah-wisata">
                <b>Description</b>
                <div class="border-description-tambah-wisata">
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>
        <div class="description-tambah-wisata" style="margin-top: 20px">
            <div class="term-cond-title-tambah-wisata">
                <b>Term and Condition</b>
                <div class="border-term-cond-tambah-wisata">
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
        <div class="btn-disc-save-tambah-wisata">
            <button class="save-tambah-wisata"><b>Add</b></button>
        </div>
    </div>

    <script>
        const selectedAW = document.querySelector(".selected-tambah-wisata");
        const optionContainerAW = document.querySelector(".option-container-tambah-wisata");

        const optionListAW = document.querySelectorAll(".option-tambah-wisata");
        selectedAW.addEventListener("click", () => {
            optionContainerAW.classList.toggle("active");
        })

        optionListAW.forEach(o => {
            o.addEventListener("click", () => {
                selectedEW.innerHTML = o.querySelector("label").innerHTML;
                optionContainerAW.classList.remove("active");
            })
        })
    </script>
</body>

</html>