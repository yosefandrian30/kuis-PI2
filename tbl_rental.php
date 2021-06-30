<?php
include 'header.html';
include 'model.php';
$model = new Model();

?>

<html>
    <head>
    <title> Tabel rental</title>
    </head>

    <body>
    <body align="center">
	
	<div class="container">
      <h1><center>Data Rental</center></h1>  
      <br>
      <a href="create_rental.php"><input type="button" value="Tambah Data"></a> 
      <br><br> 
      <table class="table table-bordered table-striped"> 
          <thead class="text-center"> 
            <tr bgcolor="0670e2"> 
					<th>ID Rental</th>
					<th>ID Mobil</th>
					<th>ID Member</th>
					<th>Lama Rental</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_rental();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$data->rental_id?></td>
							<td><?=$data->mobil_id?></td>
							<td><?=$data->member_id ?></td>
                            <td><?=$data->lama_rental?> </td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_rental.php?rental_id=<?=$data->rental_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?rental_id=<?=$data->rental_id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="8">Belum ada data pada tabel absen.</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
    </body>


	<?php
include 'footer.html';
?>

</html>