<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/editwisata.css">

</head>

<body>

    <div class="container">
        <div class="card-edit-wisata">
            <div class="wrapper-edit-wisata row">
                <div class="preview-edit-wisata">
                    <div class="preview-pic-edit-wisata tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="assets/img/Rectangle 43.png" /></div>
                        <div class="tab-pane" id="pic-2"><img src="assets/img/Rectangle 49.png" /></div>
                        <div class="tab-pane" id="pic-3"><img src="assets/img/Rectangle 50.png" /></div>
                    </div>
                    <Button class="add-img-edit-wisata"><img src="assets/img/akar-icons_camera.svg" alt="" style="width: 40;"></Button>
                    <ul class="preview-thumbnail-edit-wisata nav nav-tabs">
                        <li>
                            <a data-target="#pic-1" data-toggle="tab"><img src="assets/img/denise-jans-LRWGGldq3ow-unsplash.jpg" style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                            <Button class="rmv-btn-edit-wisata"><img src="assets/img/radix-icons_cross-2-white.svg" alt=""></Button>
                        </li>
                        <li>
                            <a data-target="#pic-2" data-toggle="tab"><img src="assets/img/denise-jans-LRWGGldq3ow-unsplash.jpg" style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                            <Button class="rmv-btn-edit-wisata"><img src="assets/img/radix-icons_cross-2-white.svg" alt=""></Button>
                        </li>
                        <li>
                            <a data-target="#pic-3" data-toggle="tab"><img src="assets/img/denise-jans-LRWGGldq3ow-unsplash.jpg" style="height: 60px; width: 50px; border-radius: 10px;" /></a>
                            <Button class="rmv-btn-edit-wisata"><img src="assets/img/radix-icons_cross-2-white.svg" alt=""></Button>
                        </li>
                    </ul>

                </div>
                <div class="details-edit-wisata">
                    <h2 class="product-title-edit-wisata"><b>Monas Jakarta <span><Button class="edit-place-edit-wisata"><img src="assets/img/ant-design_edit-filled.svg" alt=""></Button></span>
                            <span><Button class="btn-del-wisata">Delete</Button></span>
                        </b></h2><br>
                    <h4 class="harga-edit-wisata" style="margin-top: -10px;"><b>Rp 25.000 <span><Button class="edit-tarif-edit-wisata"><img src="assets/img/ant-design_edit-filled.svg" alt=""></Button></span></b></h4>
                    <div class="date-input-edit-wisata">

                        <input type="date" name="date-start" id="date1">
                        <span class="line-date-edit-wisata"></span>
                        <span><input type="date" name="date-end" id="date2" style="margin-left: 65px;"></span>
                    </div><br>
                    <div class="time-input-edit-wisata">
                        <input type="time" name="time-start" id="time1">
                        <span class="line-time-edit-wisata"></span>
                        <span><input type="time" name="time-end" id="time2" style="margin-left: 65px;"></span>
                    </div> <br>
                    <div class="col-position-edit-wisata">
                        <input type="text" name="pos-edit-wisata" id="pos-edit" value="Jln. Kuningan Jakarta Pusat">
                        <img src="assets/img/uil_location-pin-alt.svg" alt="">
                    </div> <br>
                    <ul class="tags-edit-wisata">
                        <li class="tag-edit-wisata">Fun Activities <img src="assets/img/radix-icons_cross-2.svg" alt=""></li>
                        <li class="tag-edit-wisata">Explorer Indonesia <img src="assets/img/radix-icons_cross-2.svg" alt=""></li>
                        <li class="tag-edit-wisata">Trip <img src="assets/img/radix-icons_cross-2.svg" alt=""></li>
                        <li class="tag-edit-wisata"><img src="assets/img/radix-icons_cross-2.svg" alt="" style="transform: rotate(45deg);"></li>
                        <!-- <span class="tag-1-edit-wisata">Fun Activities</span>
                            <span class="tag-2-edit-wisata">Explorer Indonesia</span>
                            <span class="tag-3-edit-wisata">Trip</span>
                            <span class="tag-4-edit-wisata"></span> -->
                    </ul>

                    <div class="select-box-edit-wisata">
                        <div class="option-container-edit-wisata">
                            <div class="option-edit-wisata">
                                <input type="radio" class="radio" id="aceh" name="category" />
                                <label for="aceh">Aceh</label>
                            </div>
                            <div class="option-edit-wisata">
                                <input type="radio" class="radio" id="sumut" name="category" />
                                <label for="sumut">Medan</label>
                            </div>
                            <div class="option-edit-wisata">
                                <input type="radio" class="radio" id="sumbar" name="category" />
                                <label for="sumbar">Padang</label>
                            </div>
                            <div class="option-edit-wisata">
                                <input type="radio" class="radio" id="riau" name="category" />
                                <label for="riau">Riau</label>
                            </div>
                            <div class="option-edit-wisata">
                                <input type="radio" class="radio" id="banten" name="category" />
                                <label for="banten">Banten</label>
                            </div>
                            <div class="option-edit-wisata">
                                <input type="radio" class="radio" id="jkt" name="category" />
                                <label for="jkt">Jakarta</label>
                            </div>
                            <div class="option-edit-wisata">
                                <input type="radio" class="radio" id="jabar" name="category" />
                                <label for="jabar">Bandung</label>
                            </div>
                            <div class="option-edit-wisata">
                                <input type="radio" class="radio" id="jogja" name="category" />
                                <label for="jogja">Yogyakarta</label>
                            </div>
                        </div>
                        <div class="selected-edit-wisata">
                            Pilih Kota
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-edit-wisata" style="margin-top: -30px;">
            <div class="description-title-edit-wisata">
                <b>Description</b>
                <div class="border-description-edit-wisata">
                    <p>Monas Jakarta</p><br>
                    <p>Nge-date Bareng Event Hunter</p><br>
                    <p>11-14 Februari 2021 <br> Yuk beli tiket event/attraction ini di Event Hunter tgl 11-14 Februari untuk dapatkan promo special buat berdua + Extra DISC 50% dengan kode promo berikut: <br> yoyoyyyy <br> DISC 50% max 20k <br> Kuota terbatas!<br>
                    </p><br>
                    <p>*Syarat & ketentuan berlaku </p>
                </div>
            </div>
        </div>
        <div class="description-edit-wisata" style="margin-top: 20px">
            <div class="term-cond-title-edit-wisata">
                <b>Term and Condition</b>
                <div class="border-term-cond-edit-wisata">
                    <p>Detail Tiket:
                    </p><br>
                    <p>Special Identitas Jakarta - Weekday
                    </p><br>
                    <p>Berlaku untuk pengunjung yang memiliki kartu Identitas Jakarta (KTP / SIM/KIPEM, mohon tunjukan saat kedatangan) <br> Berlaku dari hari Senin - Jumat (Tidak berlaku untuk Libur Nasional) <br> Special Identitas Bali - Weekend
                    </p><br>
                    <p>Berlaku untuk pengunjung yang memiliki kartu Identitas Jakarta (KTP / SIM/KIPEM, mohon tunjukan saat kedatangan) <br> Berlaku dari hari Sabtu, Minggu, dan Libur Nasional <br> Regular - Domestic & KITAS
                    </p><br>
                    <p>Berlaku untuk pengunjung Domestic seluruh Indonesia dan pemegang KITAS <br> Tiket dapat digunakan periode weekday, weekend, dan Libur Nasional <br> Elephant Mud Fun - Domestic & KITAS</p> <br>
                    <p>Berlaku untuk pengunjung Domestic seluruh Indonesia dan pemegang KITAS <br> Tiket dapat digunakan periode weekday, weekend, dan Libur Nasional <br> Khusus program Elephant Mud Fun, anak dipebolehkan mengikuti program ini dengan minimum
                        tinggi 120 cm dan akan dikenakan harga dewasa <br> Syarat dan Ketentuan Umum:
                    </p> <br>
                    <p>Monumen nasional buka setiap hari dari pukul 09:00 AM - 06:00 PM, check-in terakhir pukul 05:00 PM <br> Tiket berlaku sampai 31 October 2021 <br> Usia anak antara 2 - 12 tahun. Bayi dibawah 2 tahun gratis biaya masuk <br> Jika cuaca
                        buruk, jadwal pertunjukan dapat berubah tanpa pemberitahuan sebelumnya. <br> Cara menggunakan tiket: <br> Tunjukan voucher pada konter tiket dengan di print atau menggunakan HP <br> Hanya Voucher yang kami kirimkan melalui email
                        anda yang berlaku. Kwitansi atau bukti pembayaran tidak dapat digunakan untuk masuk. <br> Tiket yang sudah dibeli tidak dapat dikembalikan <br> Syarat dan Ketentuan Pengunjung:
                    </p> <br>
                    <p>1. Pengunjung harus dalam keadaan sehat </p>
                    <p>2. Wajib sudah vaksinasi minimal dosis 1</p>
                    <p>3. Menunjukan sertifikat vaksinasi melalui aplikasi Peduli Lindungi atau bisa dicetak </p>
                    <p>4. Mematuhi Protokol Kesehatan di venue</p>
                </div>
            </div>
        </div>
        <div class="btn-disc-save-edit-wisata">
            <button class="save-edit-wisata"><b>Save</b></button>
            <button class="discard-edit-wisata"><b>Discard</b></button>
        </div>
    </div>

    <script>
        const selectedEW = document.querySelector(".selected-edit-wisata");
        const optionContainerEW = document.querySelector(".option-container-edit-wisata");

        const optionListEW = document.querySelectorAll(".option-edit-wisata");
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