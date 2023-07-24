<!DOCTYPE html>
<html lang="en">
<head>
    <title>Turbo Tiger</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/icons-1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="smayog.css">
    <link rel="shortcut icon" href="gambar_al/fixlogott.png">
    <?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}?>
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
                <a class="nav-link active" id="navwhiteku" aria-current="page" href="smayogya.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navwhiteku" href="smayogya.php">Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navwhiteku" href="jadwal.php">Jadwal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navwhiteku" href="booking.php">Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navwhiteku" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container" style="margin-top:170px; background-color:whitesmoke;">
      <h1 id="textku">Booking Lapang Futsal <hr id="garis"></h1>
      <form action="action-input-data.php" method="POST" name="form-input-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal</label>
    <input type="date" class="form-control" name="tanggal" require >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="txt" class="form-control" name="nama" require>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Durasi /jam</label>
    <select class="form-control" name="durasi" id="durasi" onchange="funDur()">
      <option value="0">Pilih Durasi</option>
      <option value="1">1 Jam</option>
      <option value="2">2 Jam</option>
      <option value="3">3 Jam</option>
      <option value="4">4 Jam</option>
      <option value="5">5 Jam</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Lapang</label>
    <select class="form-control" name="lapang">
      <option value="Lapang 1">Lapang 1</option>
      <option value="Lapang 2">Lapang 2</option>
      <option value="Lapang 3">Lapang 3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Waktu</label>
    <input type="time" class="form-control" name="waktu" require>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harga</label>
    <input type="text" id="total" name="harga" readonly class="form-control" placeholder="0">
  </div>
  <div class="form-group">
    <input type="submit" name="Submit" class="btn bg-success" value="Submit" style="color:white; padding-left:40px;padding-right:40px; align:right; margin-top:20px">
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
   function funDur() {
	var tes = document.getElementById("durasi").value;
        var total = parseInt(tes) * 120000;
        $("#total").val(total)
}
</script>
</form> 
<div style="margin-top:15px; padding-bottom:15px;">
<a style="font-style:italic;">Harap lihat jadwal sebelum Booking!</a><br>

<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.1.3-dist/jquery-3.6.0.min.js"></script>
</body>
</html>
