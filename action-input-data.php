<?php
error_reporting(0);

session_start();
//cek button    
    if ($_POST['Submit'] == "Submit") {
    $tanggal            = $_POST['tanggal'];
    $nama        = $_POST['nama'];
    $durasi            = $_POST['durasi'];
    $lapang        = $_POST['lapang'];
    $waktu        = $_POST['waktu'];
    $harga        = $_POST['harga'];
    //validasi data data kosong
    if (empty($_POST['tanggal'])||empty($_POST['nama'])||empty($_POST['durasi'])||empty($_POST['lapang'])||empty($_POST['waktu'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='booking.php';
            </script>
        <?php
    }
    else {
        include 'config.php';
    //cek NIM di database
    $sql="SELECT tanggal,waktu FROM booking WHERE tanggal='$tanggal' AND waktu='$waktu' AND lapang='$lapang'";
    $cek=mysqli_query($conn,$sql);
    if ($cek->num_rows > 0) {
    ?>
        <script language="JavaScript">
        alert('Jadwal Sudah terdaftar, silahkan pilih jadwal lain');
        document.location='booking.php';
        </script>
    <?php
    }
    else{
    //Masukan data ke Table
    $input    ="INSERT INTO booking (tanggal,nama,durasi_sewa,lapang,waktu,harga) VALUES ('$tanggal','$nama','$durasi','$lapang','$waktu','$harga')";
    $query_input =mysqli_query($conn,$input);
    if ($query_input) {
    //Jika Sukses
    ?>
        <script language="JavaScript">
        alert('Booking Jadwal Berhasil');
        document.location='booking.php';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Booking jadwal Gagal!, Silahkan diulangi!";
    }

    }
//Tutup koneksi engine MySQL
    mysql_close($Open);
    }
}
else{ ?>
    <script language="JavaScript">
    alert('Operasi Gagal');
    document.location='booking.php';
    </script>
    <?php
}
?>