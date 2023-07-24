<!DOCTYPE html>
<html lang="en">
<head>
    <title>Turbo Tiger</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/icons-1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="smayog.css">
    <link rel="shortcut icon" href="gambar_al/fixlogott.png">

<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
thead{
  color : white;
  background-color: #002147
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</style>
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
      <div class="container" style="margin-top:170px;align:center;">
      <h1 id="textku">Jadwal Gor Tiger Turbo <hr id="garis"></h1>
          <div class="form-group" style="width:15%;margin-bottom:15px;">
    <label for="exampleFormControlInput1">Lihat Tanggal Booking</label>
    <form method="post">
    <input type="date" class="form-control" name="tanggal">
    <input class="btn bg-success" type="submit" value="Cari" style="color:white;margin-top:10px;">
</form>
  </div>
      <center>
      
      <table  style="width:100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jam Tanding</th>
                <th>Nama</th>
                <th>Durasi</th>
                <th>Lapang</th>
            </tr>
        </thead><tbody>
  <?php
  include 'config.php';
  $no= 1;
  if(isset($_POST['tanggal'])){
    $tgl = $_POST['tanggal'];
    $data = mysqli_query($conn,"select * from booking where tanggal='$tgl'");
  }
  else{
    $data = mysqli_query($conn,"select * from booking");
  }
            while($d = mysqli_fetch_array($data)){
            ?>
                <tr class="table-active">
                    <td>
                    <?php echo $no++; ?>
                    </td>
                    <td>
                    <?php echo $d['tanggal']; ?>
                    </td>
                    <td>
                    <?php echo $d['waktu']; ?>
                    </td>
                    <td>
                    <?php echo $d['nama']; ?>
                    </td>
                    <td><?php echo $d['durasi_sewa'], ' Jam'; ?>
                    </td>
                    <td>
                    <?php echo $d['lapang']; ?>
                    </td>
                </tr>
                <?php 	}
                		?>            
            </tbody>
        </table>
        </center>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-5.1.3-dist/jquery-3.6.0.min.js"></script>
</body>
</html>
