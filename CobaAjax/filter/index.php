<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Daerah</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://img.icons8.com/color/48/000000/source-code.png">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        button {
            width: 100px;
            margin: 20px 20px 0 20px;
            transition-duration: 0.4s;
        }
		header {
          background-color: #2a2a2a;
          height: 80px;
          width: 100%;
          padding: 5px 0px 0px 30px;
        }
    </style>
</head>
<body>
<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/AJAX_logo_by_gengns.svg/2560px-AJAX_logo_by_gengns.svg.png" style="width: 10%;">
</header>
 
<div class="container mb-5">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">Daerah di Indonesia</h2><hr>
	<div class="row">
		<div class="col-sm-6" style="margin-left: auto; margin-right: auto;">
			<div class="form-group">
				<label>Provinsi</label>
				<select class="form-control" name="provinsi" id="provinsi">
					<option value=""> Pilih Provinsi</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Kabupaten</label>
				<select class="form-control" name="kabupaten" id="kabupaten">
					<option value=""></option>
				</select>
			</div>
 
			<div class="form-group">
				<label>Kecamatan</label>
				<select class="form-control" name="kecamatan" id="kecamatan">
					<option value=""></option>
				</select>
			</div>
 
			<div class="form-group">
				<label>Kelurahan</label>
				<select class="form-control" name="kelurahan" id="kelurahan">
					<option value=""></option>
				</select>
			</div>
 
		</div>
	</div>
	<hr>
</div>
 
<div class="navbar bg-dark fixed-bottom">
	<div style="color: #fff;">© <?php echo date('Y'); ?> Asynchronous JavaScript and XML
	    @AJAX programming
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_provinsi.php",
          	cache: false, 
          	success: function(msg){
              $("#provinsi").html(msg);
            }
        });
 
      	$("#provinsi").change(function(){
      	var provinsi = $("#provinsi").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kabupaten.php",
              	data: {provinsi: provinsi},
              	cache: false,
              	success: function(msg){
                  $("#kabupaten").html(msg);
                }
            });
        });
 
        $("#kabupaten").change(function(){
      	var kabupaten = $("#kabupaten").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kecamatan.php",
              	data: {kabupaten: kabupaten},
              	cache: false,
              	success: function(msg){
                  $("#kecamatan").html(msg);
                }
            });
        });
 
        $("#kecamatan").change(function(){
      	var kecamatan = $("#kecamatan").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kelurahan.php",
              	data: {kecamatan: kecamatan},
              	cache: false,
              	success: function(msg){
                  $("#kelurahan").html(msg);
                }
            });
        });
     });
</script>
</body>
</html>