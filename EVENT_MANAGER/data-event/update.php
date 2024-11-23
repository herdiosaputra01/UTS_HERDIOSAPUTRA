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
$sunting = "UPDATE event SET nama='$nama',lokasi='$lokasi',tanggal='$tanggal',peserta='$peserta' WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");

?>
<script>
    document.location="index.php";
</script> 