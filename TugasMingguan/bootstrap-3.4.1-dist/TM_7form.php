<!DOCTYPE html>
<html>
<head>
  <title>Tugas Mingguan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
   <div class="container">		
   <h1><b>Cetak Data</b></h1> 
  <form action="TM_7hasil.php" method="POST">
    <div class="form-group">
		  <label class="control-menu col-sm-2" for="nama">Nama :</label>
		  <input type="text" name="nama" class="form-control" placeholder="Tidak boleh kosong!" required>
    </div>
    <div class="form-group">
			<label class="control-menu col-sm-2" for="alamat">Alamat :</label>
			<input type="text" name="alamat" class="form-control">
    </div>
    <div class="form-group">
      <label class="control-menu col-sm-2" for="jenis_kelamin">Jenis Kelamin :</label><br><br>
        <input type='radio' name='jenis_kelamin' value="laki-laki"> Laki-laki<br>
        <input type='radio' name='jenis_kelamin' value="perempuan"> Perempuan
    </div>
    <div class="form-group">
			<label class="control-menu col-sm-2" for="goldar">Golongan Darah :</label>
			<select name="goldar" class="form-control">
        <option value="Pilih"> Pilih Golongan Darah:</option>
        <option value="A"> A</option>
        <option value="B"> B</option>
        <option value="AB"> AB</option>
        <option value="O"> O</option>
			</select>
    </div>
    <div class="form-group">
      <label class="control-menu col-sm-2" for="hobi">Hobi :</label><br><br>
        <input type="checkbox" name="hobi" alt="Checkbox" value="Belajar"> Belajar<br>
        <input type="checkbox" name="hobi" alt="checkbox" value="Bermain Futsal"> Bermain Futsal<br>
        <input type="checkbox" name="hobi" alt="Checkbox" value="Berenang"> Berenang<br>
        <input type="checkbox" name="hobi" alt="Checkbox" value="Bermain Musik"> Bermain Musik
    </div>
    <div class="form-group">
			<label class="control-menu col-sm-2" for="keterangan">Keterangan :</label>
			<textarea type="text" name="keterangan" class="form-control"></textarea>
    </div>
    <button type="cetak" name="cetak" class="btn btn-primary">Cetak</button>
  </form>
</html>