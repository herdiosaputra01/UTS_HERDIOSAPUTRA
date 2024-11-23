<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$event = $_POST['event'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$peserta = $_POST['peserta'];

#3. menulis query
$simpan = "INSERT INTO event (id,event,lokasi,tanggal,peserta) VALUES ('$id','$event','$lokasi','$tanggal','$peserta')";

#4. jalankan query
$proses = mysqli_query($koneksi,$simpan);

#5. mengalihkan halaman
// header("location:index.php");

?>
<script>
    document.location="index.php";
</script> 