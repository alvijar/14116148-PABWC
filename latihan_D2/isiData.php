<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <div class="container">
	<div class="col-md-8">
        <br>
		<h4>TAMBAH DATA MAHASISWA</h4>
		<form action="tambahData.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>NRP :</label>
				<input type="text" name="nrp" class="form-control">
			</div>
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
				<label>Alamat :</label>
				<input type="text" name="alamat" class="form-control">
			</div>
            
            <div class="form-group">
				<label>Foto :</label>
                    <input class="form-control" type="file" name="foto">
            </div>
            
			
			<div class="form-group">    
                <select name="id" class="form-control" > ID Jurusan
                  <option value=""> - Jurusan -</option>
                  <option value="1">Teknik Informatika</option>
                  <option value="2">Teknik Arsitektur</option>
                  <option value="3">PWK</option>
                  <option value="4">Teknik Sipil</option>
                  <option value="5">Teknik Geofisika</option>
                </select>
			</div>
			<button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
            <button type="reset" name="hapus" class="btn btn-danger">Clear</button>
            <br>
            <br>
        </form>
        <br>
        <p>==============================================================================</p>
        <h4>SEARCH DATA MAHASISWA</h4>
        <form action="hasilSearch.php" method="post">
             Masukkan Nama yang anda cari :
            <input class="form-control" type ="text" type ="text" name="cari">
            <br>
            <input class="btn btn-primary" type ="submit" value="cari" >
            <button type="reset" name="hapus" class="btn btn-danger">Clear</button>
            
        </form>
        <br>
        <p>==============================================================================</p>
        <h4>Hapus Data Mahasiswa</h4>
        <form action="prosesHapus.php" method="post">
            
        Masukkan NRP yang ingin di hapus :
        <input class="form-control" type ="text" type ="text" name="hapus">
        <br>
        <input class="btn btn-primary"  type ="submit" value="hapus" >
        <button type="reset" name="hapus" class="btn btn-danger">Clear</button>
        </form>
        <br>
        <br>
        <br>
    </div>
    </div>
</body>
</html>