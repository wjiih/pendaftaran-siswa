

<?php

include ("config.php");

//cek apakah tombol simpan sudah di klik atau belum?
if(isset($_POST['simpan'])) {

     //ambil data dari formulir
     $id = $_POST['id'];
     $nama = htmlspecialchars($_POST['nama']);
     $alamat = htmlspecialchars($_POST['alamat']);
     $jk = htmlspecialchars($_POST['jenis_kelamin']);
     $agama = htmlspecialchars($_POST['agama']);
     $sk = htmlspecialchars($_POST['sekolah_asal']);
     // buat query
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sk' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman dasboard-admin.php dengan status=sukses
        header('Location: dasboard-admin.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman dasboard-admin.php dengan status=gagal
        header('Location: dasboard-admin.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
