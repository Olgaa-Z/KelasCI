<!DOCTYPE html>
<html>
<head>
	<title>FORM INPUTAN BERITA</title>
	<meta charset="UTF-8">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>
<body>

<div class="container">
	<br>
	<a class="btn btn-info" href="<?php echo site_url('Berita');?>">Data Berita</a>
		
	<form method="post" action="<?php echo site_url('Berita/insert'); ?>"  enctype="multipart/form-data">

		<div class="form-group">
			<label for="usr">Judul :</label>
			<input type="text" name="judul" class="form-control">
		</div>

		<div>
			<label>Isi Berita</label>
			<textarea name="isi" rows="15" class="form-control"></textarea>
		</div>

		<div>
			<label for="usr">Gambar Berita :</label>
			<input type="file" name="gambar" class="form-control">
		</div>

		<br>

		<button type="submit" name="button_simpan" class="btn btn-success" style ="margin-bottom:60px"> SIMPAN </button>

	</form>
</div>

</body>
</html>