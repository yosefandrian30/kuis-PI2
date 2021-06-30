<?php
include 'header.html';
$mobil_id = $_GET['mobil_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_mobil($mobil_id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Mobil</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Mobil</h1>
	<br><br>
	<form action="proses.php" method="post">

		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id" value="<?php echo $data->mobil_id ?>" >
		<br>
		<label>Merk</label>
		<br>
		<input class="form-control" type="text" name="merk" value= "<?php echo $data->merk ?>">
		<br>
		<label>Tahun Keluaran</label>
		<br>
		<input class="form-control" type="text" name="thn_keluaran" value="<?php echo $data->thn_keluaran ?>">
		<br>
		<label>Tarif</label>
		<input class="form-control" type="number" name="tarif" value= "<?php echo $data->tarif ?>">
		<br>
        <br>
		<a class="btn btn btn-info"  href="tbl_mobil.php">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_editmobil">Submit</button> 
	</form>
      </div>
    </div>
  </div>
	
	
</body>
<?php
include 'footer.html';
?>
</html>
