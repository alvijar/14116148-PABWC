<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data Jurusan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<div class="container">
	<div class="col-md-8">
		<h3>Tambah Data</h3>
		<form action="tambahJurusan.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Jurusan</label>
				<input type="text" name="nama" class="form-control">
			</div>
			
			<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
			<button type="reset" name="hapus" class="btn btn-danger">Clear</button>
		</form>
	</div>
	</div>
</body>
</html>