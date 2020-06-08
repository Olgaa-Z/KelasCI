<!DOCTYPE html>
<html>
<head>
	<title>EDIT BERITA</title>
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">

		<?php
			foreach ($berita as $row) {
		?>

			<form method="post" action="<?php echo site_url('Berita/editform'); ?>"
                      enctype="multipart/form-data">

                <input type ="hidden" name="id_berita" value="<?php echo $row->id_berita; ?>">

                <div class="form-group">
                    <label for="comment">Judul:</label>
                    <input type="text" class="form-control" name="judul" required="" value="<?php echo $row->judul_berita; ?>"> 
                </div>

                <div class="form-group">
                    <label for="comment">Isi:</label> 
                    <textarea class="form-control" rows="15" name="isi"  required=""><?php echo $row->isi_berita; ?></textarea>
                </div> 

                <div class="form-group">
                    <label for="comment">Tanggal:</label>
                    <input type="text" class="form-control" name="tanggal" required="" value="<?php echo $row->tanggal_berita; ?>"> 
                </div> 

                <div clas="form_group">
                    <label for="usr">Gambar:</label>
                    <input type="file"  class="form-control" name="gambar">
                </div>

                <div class="form-group">
                    <img src="<?php echo base_url(); ?>assets/upload_berita/<?php echo $row->gambar_berita; ?>" style="width: 80px">
                </div>

                <input type="hidden" name="nm_foto" value="<?php echo $row->gambar_berita; ?>">

                <button class="btn btn-success" type="submit">Simpan</button>
				
			</form>
		<?php
			}
		?>
		
	</div>

</body>
</html>