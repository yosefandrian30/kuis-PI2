<?php
include 'header.html';
$rental_id = $_GET['rental_id'];
include 'model.php';
$model = new Model();
$data = $model->edit_rental($rental_id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Rental</title>
</head>

<body>
	
	<div class="container">
  	<div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Rental</h1>
	<br><br>
	<form action="proses.php" method="post">

		<label>ID Rental</label>
		<br>
		<input class="form-control" type="number" name="rental_id" value="<?php echo $data->rental_id ?>">
		<br>
		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id" value="<?php echo $data->mobil_id?>">
		<br>
		<label>ID member</label>
		<br>
		<input class="form-control" type="number" name="member_id" value="<?php echo $data->member_id ?>">
		<br>
		<label>Lama Rental</label>
		<input class="form-control" type="text" name="lama_rental" value="<?php echo $data->lama_rental?>">
		<br>
        <br>
		<a class="btn btn btn-info"  href="tbl_rentalphp">Kembali</a> <button class="btn btn btn-success" type="submit" name="submit_editrental">Submit</button> 
	</form>
    </div>
  </div>
</div>
	
	
</body>
<?php
include 'footer.html';
?>
</html>
