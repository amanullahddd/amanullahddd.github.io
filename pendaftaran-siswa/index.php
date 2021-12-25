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
    .form-control {
        border: #0b3b8 1px solid;
    }
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
    <div class="jumbotron vertical-center">
        <div class="container p-2 card" style="max-width: 45rem;">
        <h3 class="text-center my-3">Pendaftaran Mahasiswa Baru</h3>
        <h1 class="text-center">Kampus Merdeka</h1>
            <div class="row">
                <div class="col text-center my-3">
                <form name="my-form">
                    <input type="button" value="Daftar Baru" onclick="window.location.href='./form-daftar.php'" class="btn btn-primary">
                    <input type="button" value="Pendaftar" onclick="window.location.href='./list-siswa.php'" class="btn btn-primary">
                </form>
                </div>
            </div>
        </div>
  </div>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    <footer>
        <div class="font-weight-light text-center p-4">
            Copyright 2021 by Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi RI
        </div>
    </footer>
    </body>
</html>