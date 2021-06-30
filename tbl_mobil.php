<?php
include 'header.html';
include 'model.php';
$model = new Model();

?>

<html>
    <head>
    <title> Tabel Mobil</title>
    </head>

    <body>
    <body align="center">
	
	<div class="container">
      <h1><center>Data Mobil</center></h1>  
      <br>
      <a href="create_mobil.php"><input type="button" value="Tambah Data"></a> 
      <br><br> 
      <table class="table table-bordered table-striped"> 
          <thead class="text-center"> 
            <tr bgcolor="0670e2"> 
				
					<th>ID Mobil</th>
					<th>Merk</th>
					<th>Tahun Keluaran</th>
					<th>Tarif</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_mobil();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$data->mobil_id?></td>
							<td><?=$data->merk ?></td>
                            <td><?=$data->thn_keluaran?></td>
							<td>Rp. <?=$data->tarif ?> ,-</td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_mobil.php?mobil_id=<?=$data->mobil_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?mobil_id=<?=$data->mobil_id ?>">Delete</a>
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