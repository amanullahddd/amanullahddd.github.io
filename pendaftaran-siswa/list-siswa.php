<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pendaftaran Mahasiswa Baru</title>
    <style>
    header {
    background-color: #242526;
    height: 80px;
    width: 100%;
    padding: 20px 0px 0px 30px;
    }
    h1 {
        margin: 30px 0px 10px 0px;
        text-align: center;
    }
    .container {
        padding-top: 25px;
        font-weight: 500;
    }
    /* .form-control {
        border: #0b3b8 1px solid;
    } */
    footer {
        background-color: #e4e6eb;
        left: 0;
        bottom: 0;
        width: 100%;
        position: fixed;
        margin-top: 120px;
    }
    </style>
</head>

<body>
<header>
        <img src="https://kampusmerdeka.kemdikbud.go.id/static/media/logo-pendidikan.92aef756.webp" alt="logokemen" style="padding-right: 10px;">
        <img src="https://kampusmerdeka.kemdikbud.go.id/static/media/logo-white.d216d864.webp" alt="logokm">
</header>
    <!-- <header>
        <h3>Daftar Mahasiswa yang sudah mendaftar</h3>
    </header> -->

    

    <div class="jumbotron vertical-center">
        <div class="container p-2 card" style="max-width: 90%;">
        <h3 class="text-center">Daftar Mahasiswa yang sudah mendaftar</h3>
        <nav class="navbar bg-light">
        <a class="navbar-brand" href="form-daftar.php">[+] Tambah Baru</a>
        </nav>
        <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Sekolah Asal</th>
            <th scope="col">Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <label class="col-sm-2 col-form-label">Total: <?php echo mysqli_num_rows($query) ?></label>
        </div>
    </div>

    
    
    <!-- <p>Total: <?php echo mysqli_num_rows($query) ?></p> -->

    <div class="text-center"><input type="button" value="Kembali" onclick="window.location.href='./index.php'" class="btn btn-success my-2"></div>
    <footer>
        <div class="font-weight-light text-center p-4">
            Copyright 2021 by Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi RI
        </div>
    </footer>
    </body>
</html>