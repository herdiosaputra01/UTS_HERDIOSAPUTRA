<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$peserta = $_POST['peserta'];

#3. menulis query
$simpan = "INSERT INTO events (id,nama,lokasi,tanggal,peserta) VALUES ('$id','$nama','$lokasi','$tanggal','$peserta')";

#4. jalankan query
$proses = mysqli_query($koneksi,$simpan);

#5. mengalihkan halaman
// header("location:index.php");

?>
<script>
    document.location="index.php";
</script> 