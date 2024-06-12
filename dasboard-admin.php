<?php
include("config.php");

if(isset($_GET['isLoginAdmin'])){
  $username = htmlspecialchars($_GET['username']);
  $password = htmlspecialchars($_GET['password']);

  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $query = mysqli_query($db,$sql);

  if(mysqli_num_rows($query) > 0){
    $login_message = "Login berhasil";
  }else{
    $login_message = "Login gagal";
    echo "<script>
     window.location.href = 'login.php?status=gagal';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <title>Pendaftaran Siswa Siswi Baru</title>
  
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
        }
        nav {
            background-color: #4CAF50;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 3px;
            margin-right: 5px;
            background-color: #45a049;
        }
        nav a:hover {
            background-color: #357835;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border: 2px solid #4CAF50;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #4CAF50;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        td a {
            color: #333;
            text-decoration: none;
        }
        p {
            text-align: center;
            color: #4CAF50;
        }
       
            .nav-link.active {
                color:white;

        }
 
    
    </style>
</head>
<body>
    <header>
        
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <h3>Siswa yang sudah mendaftar</h3> 
        
    </header>

    <nav>

    </nav>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Sambungkan ke database di sini (gunakan mysqli atau PDO)

            // Lakukan query untuk mendapatkan data siswa
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db, $sql);
            $noData = 0;

            // Loop untuk menampilkan data siswa
            while($siswa = mysqli_fetch_array($query)) {
                $noData++;
                echo "<tr>";
                echo "<td>".$noData."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$siswa['id']."' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
