<!DOCTYPE html>
<html lang="en">
<head>
    <title>Turbo Tiger</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/icons-1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="smayog.css">
    <link rel="shortcut icon" href="gambar_al/fixlogott.png">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="nav1">
        <div class="container-fluid">
          <p id="judul"><img src="gambar_al/fixlogott.png" style="padding-left: 100px;"><span>T</span>iger <span>T</span>urbo <span>F</span>utsal</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="padding-left: 100px;">
              <li class="nav-item">
                <a class="nav-link active" id="navwhiteku" aria-current="page" href="#bgutama">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navwhiteku" href="#textku">Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navwhiteku" href="jadwal.php">Jadwal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navwhiteku" href="booking.php">Booking</a>
              </li>
              <li class="nav-item">
                <?php
                session_start();
                if (isset($_SESSION['username'])) {              
                ?>
                <a class="nav-link" id="navwhiteku" href="logout.php">Logout</a>
                <?php 
                }
                else{
                  ?>
                  <a class="nav-link" id="navwhiteku" href="index.php">Login</a>
                  <?php
                }
                ?>

              </li>
            </ul>
          </div>
        </div>
      </nav>
     
        <div class="row">
            <div class="col-12 bg-secondary" id="bgutama">
                <div class="carousel"></div>
            </div>
            <p id="text_sma"> <img src="gambar_al/fixlogott.png" style="width:100px ;"><span>T</span>iger <span>T</span>urbo <span>F</span>utsal</p>
            <form class="d-flex" id="tombol_cari">
                <input class="form-control me-2" type="search" placeholder="Apa yang anda cari..." aria-label="Search" style="border: 1px ; border-radius: 50px 50px;">
                <button class="btn " type="submit" style="border: 1px ; border-radius: 50px 50px;  background-color: #002147; color: white;"> Search</button>
            </form>
            <!--bagian berita----------------------------------------------------------------------------------------------------------------->
            <h1 id="textku">Fasilitas Gor Tiger Turbo <hr id="garis"></h1>
            <hr>
            <div class="row " id="nav2">
                  <!--card pertama-->  
                  <div class="card" style="width: 400px; box-shadow: 3px 3px 3px 3px darkgray;">
                    <img src="gambar_al/lapfutsaltt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title" style="padding-top:40px ;"><b>Lapangan Futsal Tiger Turbo</b></h5>
                      <p class="card-text">Gor turbo tiger menyediakan 3 lapangan futsal dengan lantai vinyl dengan 12 cahaya lampu dan dilengkapi oleh tribun untuk 
                        suporter menonton pertandingan.</p>
                    </div>
                  </div>
                  <!--card kedua-->
                  <div class="card" style="width: 400px; box-shadow: 3px 3px 3px 3px darkgray;">
                    <img src="gambar_al/wctt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>Toilet Futsal    Tiger Turbo</b></h5>
                      <p class="card-text">Toilet ini terdapat 1 toliet pria dan 1 toilet wanita yang berisi 4 closet disetiap toiletnya,berlokasi
                        didalam gor futsal sebelah kanan tribun.
                      </p>
                    </div>
                  </div>
                  <!--card ketiga-->
                  <div class="card" style="width: 400px; box-shadow: 3px 3px 3px 3px darkgray;">
                    <img src="gambar_al/warungtt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>Toko Belanja makan dan minuman</b></h5>
                      <p class="card-text">di luar gor kami menyediakan minimarket untuk perbelanjaan makan dan minuman saat berada dalam kawasan gor</p>
                    </div>
                  </div>
                   <!--card keempat-->
                  <div class="card" style="width: 400px;margin-top: 50px; box-shadow: 3px 3px 3px 3px darkgray;">
                    <img src="gambar_al/ruangganti.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title"><b>Ruang ganti pemain</b></h5>
                      <p class="card-text">Ruang ganti terdapat 2 ruangan untuk mengganti pakaian pemain futsal yang berlokasi tiap bawah tengah tribun.</p>
                    </div>
                  </div>
                   <!--card kelima-->
                  <div class="card" style="width: 400px;margin-top: 50px; box-shadow: 3px 3px 3px 3px darkgray;">
                    <img src="gambar_al/payment.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title"><b>Pembayaran</b></h5>
                      <p class="card-text">Tiger Turbo futsal menyediakan pembayaran berbasis transfer dan bayar langsung yang sudah membuat jadwal dalam website resmi tiger turbo futsal ini</p>
                    </div>
                  </div>
                   <!--card ketujuh-->
                  <div class="card" style="width: 400px;margin-top: 50px; box-shadow: 3px 3px 3px 3px darkgray;">
                    <img src="gambar_al/parkiran.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title"><b>Parkiran</b></h5>
                      <p class="card-text">Tiger Turbo ini menyediakan parkiran motor dan mobil kurang atau lebih menampung 100 unit transportasi, dan terdapat palang pintu parkir sebagai penertiban parkir pengunjung. Ditempat parkir Tiger Turbo sendiri terdapat beberapa CCTV untuk keamanan motor atau mobil pengunjung.</p>
                    </div>
                  </div>

                </div>
            </div>
        </div>
        <!--akhir berita----------------------------------------------------------------------------------------------------------------->
          
           <!--bagian extrakulikuler----------------------------------------------------------------------------------------------------------------->
        <div class="row" id="navi3" style="background-color: 	#F5F5F5;">
          <h1 id="namaextra">List sewa /jam<hr id="garis"></h1>
          <!--bagian list harga---------------------------------------------------------------->>
        <div class="row" id="listsewa">
            <div class="flip-card">
              <div class="flip-card-inner">
                  <div class="flip-card-front"style="padding-top:70px;">
                      <h2>  per-jam sewa lapang</h2>
                  </div>
                  <div class="flip-card-back">
                      <h1>Rp.120.000</h1>
                  </div>
              </div>
            </div>

            <div class="flip-card">
              <div class="flip-card-inner">
                  <div class="flip-card-front"style="padding-top:70px;">
                      <h2>2 jam sewa lapang</h2>
                  </div>
                  <div class="flip-card-back">
                      <h1>Rp.240.000</h1>
                  </div>
              </div>
            </div>

            <div class="flip-card" >
              <div class="flip-card-inner">
                  <div class="flip-card-front"style="padding-top:70px;">
                      <h2>3 jam sewa lapang</h2>
                  </div>
                  <div class="flip-card-back">
                      <h1>Rp.360.000</h1>
                  </div>
              </div>
            </div>
            </div>
            <div class="row" id="listsewa2">
            <div class="flip-card">
              <div class="flip-card-inner">
                  <div class="flip-card-front" style="padding-top:30px;">
                      <h2>2 jam sewa lapang <br> + <br> 1 dus aqua botol</h2>
                      <p style="color:goldenrod ;">Promo!!</p>
                  </div>
                  <div class="flip-card-back">
                      <h1>Rp.265.000</h1>
                  </div>
              </div>
            </div>

            <div class="flip-card">
              <div class="flip-card-inner">
                  <div class="flip-card-front">
                      <h2>per-jam sewa 2 lapang <br> + <br> 3 piala kejuaraan</h2>
                      <p style="color:goldenrod ;">Promo tournamen!</p>
                  </div>
                  <div class="flip-card-back">
                      <h1>Rp.500.000</h1>
                  </div>
              </div>
            </div>

            <div class="flip-card">
              <div class="flip-card-inner">
                  <div class="flip-card-front"style="padding-top:30px;">
                      <h2>per-jam sewa lapang</h2>
                      <p style="color:goldenrod ;">Promo anak sekolah!</p>
                  </div>
                  <div class="flip-card-back">
                      <h1>Rp.100.000</h1>
                  </div>
              </div>
            </div>
        </div>
        
          
        <!--akhir extrakulikuler----------------------------------------------------------------------------------------------------------------->

        <!--awal prestasi----------------------------------------------------------------------------------------------------------------->
        <div class="col-md-12">
            <h1 id="namaextra">Berita Tiger Turbo Futsal <hr id="garis"></h1>
        </div>
        <div class="row">
          <div class="offset-1 col-sm-10" style="margin-bottom: 50px;">
            <div class="card">
              <div class="card-body">
                <img src="gambar_al/testi1.jpg" id="gb-prestasi">
                <h5 class="card-title">Hasil Turnamen Pertandingan Antar Kampus Purwakarta: PEI FC Vs STT FC berakhir imbang</h5>
                <p class="card-text"><img src="gambar_al/icons8-calendar-50.png" style="width: 25px;"> 04 Aug, 2019 - 11 Aug, 2019
                  &emsp;<img src="gambar_al/icons8-map-marker-30.png"> Purwakarta, Jawa Barat
                </p><hr>
                <p class="card-text"><b>Laga PEI FC melawan STT FC berjalan dengan dramatis.<br> Pertandingan yang sepertinya akan menjadi milik PEI FC ternyata berjalan sengit sampai menit-menit akhir.</p>
              </div>
            </div>
          </div>
          <div class="offset-1 col-sm-10" style="margin-bottom: 50px;">
            <div class="card">
              <div class="card-body">
                <img src="gambar_al/testi2.jpg" id="gb-prestasi">
                <h5 class="card-title">Tim Futsal TJ'S Kembali Juara Turnamen Antar Provinsi Secara Beruntun</h5>
                <p class="card-text"><img src="gambar_al/icons8-calendar-50.png" style="width: 25px;"> 01 Apr, 2019 - 08 Apr, 2019
                  &emsp;<img src="gambar_al/icons8-map-marker-30.png">  Bandung, Jawa Barat
                </p><hr>
                <p class="card-text">Perjuangan Tim Futsal TJ'S kembali berhasil menyabet gelar juara dalam turnamen futsal antar Provinsi Edisi II.</p>
              </div>
            </div>
          </div>
          <div class="offset-1 col-sm-10" style="margin-bottom: 50px;">
            <div class="card">
              <div class="card-body">
                <img src="gambar_al/testi3.png" id="gb-prestasi">
                <h5 class="card-title">Momen-momen Menarik TJ'S vs Macan Hitam di Piala Jabar Futsal 2019: Drama Detik Terakhir</h5>
                <p class="card-text"><img src="gambar_al/icons8-calendar-50.png" style="width: 25px;"> 22 Mar, 2019 - 23 Mar, 2019
                  &emsp;<img src="gambar_al/icons8-map-marker-30.png">  Bandung, Jawa Barat
                </p><hr>
                <p class="card-text">Duel ini berlangsung dengan alot. Pasalnya TJ'S mampu memberikan perlawanan apik pada Macan Hitam, yang merupakan salah satu tim futsal terkuat di Jawa Barat.</p>
              </div>
            </div>
          </div>
        </div>
        <!--akhir prestasi----------------------------------------------------------------------------------------------------------------->
        
          <div class="row col-12" style="background-color: #002147; padding: 100px;">
            <div class="col-md-3 col-sm-6 item">
              <div class="fun-fact">
                  <div class="icon">
                      <img src="gambar_al/certificate.png"style="width:100px;">
                  </div>
                  <div class="info">
                      <h3 style="color: white;font-size: 30px; font-weight:bolder ; margin-top: 20px;">Ceremony</h3>
                      <span class="medium">By CEO TTF<br> Aldian filzah daryanto</span>
                  </div>
              </div>    
          </div>
              <div class="col-md-3 col-sm-6 item">
                  <div class="fun-fact">
                      <div class="icon">
                          <img src="gambar_al/certificate.png"style="width:100px;">
                      </div>
                      <div class="info">
                          <h3 style="color: white;font-size: 30px; font-weight:bolder ; margin-top: 20px;">Certificate</h3>
                          <span class="medium">Kementrian<br> Zainudin Amali</span>
                      </div>
                  </div>    
              </div>
              <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <div class="icon">
                        <img src="gambar_al/certificate.png"style="width:100px;">
                    </div>
                    <div class="info">
                        <h3 style="color: white;font-size: 30px; font-weight:bolder ; margin-top: 20px;">Certificate</h3>
                        <span class="medium">Ketua PSSI <br>iwan bule</span>
                    </div>
                </div>    
            </div>
            <div class="col-md-3 col-sm-6 item">
              <div class="fun-fact">
                  <div class="icon">
                      <img src="gambar_al/certificate.png"style="width:100px;">
                  </div>
                  <div class="info">
                      <h3 style="color: white;font-size: 30px; font-weight:bolder ; margin-top: 20px;">Certificate</h3>
                      <span class="medium">ketua PFP <br> Agam ismail</span>
                  </div>
              </div>    
          </div>
          
          </div>
        <!--awal kontak----------------------------------------------------------------------------------------------------------------->
        <div class="row col-12" id="denah"style="background-color: 	#F5F5F5;">
          <h1 id="namaextra" style="margin-bottom: 50px;">Hubungi kami<hr id="garis"></h1>
            <div class="col-6">
              <h2 style="margin-bottom: 10px; font-weight: bold; font-size: 28px;">Denah lokasi</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.906278609193!2d110.35040931474853!3d-7.799746694379289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57f4fa62fdab%3A0x4d7d92f9032750f0!2sSMA%20Negeri%201%20Teladan%20Yogyakarta!5e0!3m2!1sid!2sid!4v1642829621503!5m2!1sid!2sid" 
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-6">
              <h2 style="margin-bottom: 10px; font-weight: bold; font-size: 28px; padding-bottom: 10px;">Kontak</h2>
              <i class="bi bi-envelope-fill" style="font-size: 16px; " href="contoh_layout.html">&ensp;<u> Email </u><br>
                &emsp;&ensp; tiger@gmail.sch.id</i><br><br>
                <i class="bi bi-map-fill" style="font-size: 16px; " href="contoh_layout.html">&ensp;<u> Address</u> <br>
                  &emsp;&ensp; Jl. HOS Cokroaminoto No.10, Pakuncen, Wirobrajan, <br>&emsp;&ensp;jawa barat, Daerah
                   purwamekar 55253</i><br><br>
                  <i class="bi bi-telephone-fill" style="font-size: 16px; " href="contoh_layout.html">&ensp; <u>Phone</u> <br>
                    &emsp;&ensp; 0274 - 513454</i><br><br>
                    <i class="bi bi-credit-card-2-back-fill" style="font-size: 16px; " href="contoh_layout.html">&ensp;<u> Fax </u><br>
                      &emsp;&ensp; 0274 - 542604</i>
            </div>
        </div>
        
        <!--akhir kontak----------------------------------------------------------------------------------------------------------------->
        <!--footer----------------------------------------------------------------------------------------------------------------->
        <d iv class="footer row col-md-12" >
              <div class="col-4" style="padding-left: 50px;"  >
               <img src="gambar_al/fixlogott.png" id="gb-footer"><span>Tiger Turbo Futsal<span>
                <p id="text-footer">Tiger Turbo Futsal adalah tempat futsal yang berlokasi cikao Purwakarta,yang memiliki pelayanan yang bisa membuat pelanggan nyaman.</p>
                <hr style="border: 2px solid white ;">
                <p><a class="linksosmed" href="https://web.facebook.com/smanegeri1yogyakarta?_rdc=1&_rdr"><img src="gambar_al/icons8-facebook-48.png" id="icon-footer" ></a>
                  <a class="linksosmed" href="https://www.instagram.com/nrmaaaaw01/"><img src="gambar_al/icons8-instagram-60.png" id="icon-footer"></a>
                  <a class="linksosmed" href="https://www.youtube.com/watch?v=iTR5m4lBttU"><img src="gambar_al/icons8-youtube-60.png" id="icon-footer"></p></a>    
              </div>
              <div class="col-4">
               <p id="text-footer" style="font-size: 25px; margin-top: 75px;">Info Futsal</p>
               <div sty>
                 <img src="gambar_al/testi1.jpg" id="gb-footer2">
                 <p style="color: goldenrod;">Informasi Peraturan. <br><span style="color: white;">jumlah pemain <br>pemain futsal terdiri dari 10 pemain…</span></p>
                  <hr style="border: 2px solid white ;">
                  <img src="gambar_al/gbfooter.jpg" id="gb-footer2">
                 <p style="color: goldenrod;">Proses Booking TTF. <br><span style="color: white;">pembayaran booking <br>bisa melaui e-money agar bisa lebih praktis…</span></p>
               </div>
              </div>
              <div class="col-4" style="padding-right: 70px;">
                <p id="text-footer" style="font-size: 25px; margin-top: 75px;">Agenda Futsal</p>
                <div sty>
                  <img src="gambar_al/gbfooter2.jpg" id="gb-footer2">
                  <p style="color: goldenrod;">LIGA Spasi. <br><span style="color: white;"> <br>pendaftaran dan informasi tambahan bisa melalui website kami…</span></p>
                   <hr style="border: 2px solid white ;">
                   <img src="gambar_al/gbfooter3.jpg" id="gb-footer2">
                  <p style="color: goldenrod;">pembagian sertifikat. <br><span style="color: white;">pemberian oleh ceo <br>tiger turbo futsal nurmawati.</span></p>
                </div>
              </div>
              <hr style="border: 1px solid white ;">
              <p style="color: white;">&emsp;&emsp;&emsp;&copy;  Copyright 2019. All Rights Reserved By <span style="color: goldenrod;">Tiger Turbo Futsal</span>
               <span style="float: right; color: white; margin-right: 50px;"> TERMS OF USER &ensp; |&ensp; LICENSE &ensp;|&ensp; SUPPORT</span></p>
            </div>
            <script>
              var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
              var alertTrigger = document.getElementById('liveAlertBtn')

              function alert(message, type) {
                var wrapper = document.createElement('div')
                wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

                alertPlaceholder.append(wrapper)
              }

              if (alertTrigger) {
                alertTrigger.addEventListener('click', function () {
                  alert('Terima Kasih atas Saran atau Kritik anda (Berhasil DiKirim)', 'success')
                })
              }
            </script>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.1.3-dist/jquery-3.6.0.min.js"></script>
</body>
</html>