<?php
include 'model.php';
//member
if (isset($_POST['submit_member'])) {
	$member_id = $_POST['member_id']; 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$model = new Model();
	$model->insert_member($member_id, $nama, $alamat, $tlp);
	header('location:tbl_member.php');
}

if (isset($_POST['submit_editmember'])) {
	$member_id = $_POST['member_id']; 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$model = new Model();
	$model->update_member($member_id, $nama, $alamat, $tlp);
	header('location:tbl_member.php');
}

if (isset($_GET['member_id'])) {
	$member_id = $_GET['member_id'];
	$model = new Model();
	$model->delete_member($member_id);
	header('location:tbl_member.php');
}

//rental
if (isset($_POST['submit_rental'])) {
	$rental_id = $_POST['rental_id'];
	$mobil_id = $_POST['mobil_id'];
	$member_id = $_POST['member_id']; 
	$lama_rental = $_POST['lama_rental'];
	$model = new Model();
	$model->insert_rental($rental_id,$mobil_id,$member_id, $lama_rental);
	header('location:tbl_rental.php');
}

if (isset($_POST['submit_editrental'])) {
	$rental_id = $_POST['rental_id'];
	$mobil_id = $_POST['mobil_id'];
	$member_id = $_POST['member_id']; 
	$lama_rental = $_POST['lama_rental'];
	$model = new Model();
	$model->update_rental($rental_id,$mobil_id,$member_id, $lama_rental);
	header('location:tbl_rental.php');
}

if (isset($_GET['rental_id'])) {
	$rental_id = $_GET['rental_id'];
	$model = new Model();
	$model->delete_rental($rental_id);
	header('location:tbl_rental.php');
}

//mobil

if (isset($_POST['submit_mobil'])) {
	$mobil_id = $_POST['mobil_id'];
	$merk = $_POST['merk'];
	$thn_keluaran = $_POST['thn_keluaran']; 
	$tarif = $_POST['tarif'];
	$model = new Model();
	$model->insert_mobil($mobil_id,$merk,$thn_keluaran, $tarif);
	header('location:tbl_mobil.php');
}

if (isset($_POST['submit_editmobil'])) {
	$mobil_id = $_POST['mobil_id'];
	$merk = $_POST['merk'];
	$thn_keluaran = $_POST['thn_keluaran']; 
	$tarif = $_POST['tarif'];
	$model = new Model();
	$model->update_rental($mobil_id,$merk,$thn_keluaran, $tarif);
	header('location:tbl_mobil.php');
}

if (isset($_GET['mobil_id'])) {
	$mobil_id = $_GET['mobil_id'];
	$model = new Model();
	$model->delete_mobil($mobil_id);
	header('location:tbl_mobil.php');
}
