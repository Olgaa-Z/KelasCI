<!DOCTYPE html>
<html>
<head>
	<title>BERITA TERKINI</title>
	<meta charset="UTF-8">   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<br>
	<p><a class="btn btn-success" href="<?php echo site_url('Berita/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>
	<table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
		
		<thead>
			<tr>
				<th>Nomor
				<th>Judul
				<th>Isi
				<th>Gambar
				<th>Tanggal
				<th>Aksi</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$berita= $this->Berita_m->select_db();
			$no=1;

			foreach ($berita as $row) {
				?>

					<tr>
						<td> <?php echo $no++; ?>
						<td> <?php echo $row->judul_berita; ?>
						<td> <?php echo $row->isi_berita; ?>
						<!-- <td> <img src=" <?php echo base_url(); ?> assets/upload_berita/ <?php echo $row->gambar_berita; ?>" > </td> -->
						<td> <img src="<?php echo base_url(); ?>assets/upload_berita/<?php echo $row->gambar_berita; ?>" style="width: 80px">

						<td> <?php echo $row->tanggal_berita; ?> </td>
						<td> <a class="btn btn-danger" href="<?php echo site_url('Berita/delete/'. $row->id_berita); ?>"
							 onclick=" return confirm('Apakah anda yakin akan menhapus data?')"> HAPUS </a>

							 <a class="btn btn-info" href="<?php echo site_url('Berita/edit/'. $row->id_berita); ?>"> EDIT </a>
						</td>

					</tr>

				<?php
			}

			?>
		</tbody>

	</table>
</div>

</body>
</html>