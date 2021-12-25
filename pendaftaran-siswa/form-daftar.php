<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulir Pendaftaran Mahasiswa Baru</title>
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
        <div class="container p-2 card" style="max-width: 40rem;">
        <h3 class="text-center">Formulir Pendaftaran Mahasiswa Baru</h3>
        <div class="container">
            <div class="col-lg-12 m-auto d-block">
                <form action="proses-pendaftaran.php" method="POST">

                <fieldset>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama: </label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat: </label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat"></textarea>
                    </div>
                </div>
                <div class="row">
                    <label for="jenis_kelamin" class="col-form-label col-sm-2 pt-0">Jenis Kelamin: </label>
                    <div class="col-sm-10">
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama: </label>
                    <div class="col-sm-10">
                    <select class="form-control" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sekolah_asal" class="col-sm-2 col-form-label">Sekolah Asal: </label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
                </div>
                <div class="form-group row">
                     <div class="col-sm-15 mx-3">
                    <button class="btn btn-primary" type="submit"name="daftar">Daftar</button>
                    </div>
                </div>

                </fieldset>

                </form>
                <div class="text-center"><input type="button" value="Kembali" onclick="window.location.href='./index.php'" class="btn btn-success my-2"></div>
                </div>
            </div>
        </div>
    </div>

    

    <footer>
        <div class="font-weight-light text-center p-4">
            Copyright 2021 by Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi RI
        </div>
    </footer>
    </body>
</html>