<?php
include 'header.html';
include 'model.php';
$model = new Model();

?>

<html>
    <head>
    <title> Tabel Member</title>
    </head>

    <body>
    <body align="center">
	
	<div class="container">
      <h1><center>Data Member</center></h1>  
      <br>
      <a href="create_member.php"><input type="button" value="Tambah Data"></a> 
      <br><br> 
      <table class="table table-bordered table-striped"> 
          <thead class="text-center"> 
            <tr bgcolor="0670e2"> 
					<th>ID Member</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Nomor Tlp</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_member();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$data->member_id?></td>
							<td><?=$data->nama ?></td>
							<td><?=$data->alamat ?></td>
                            <td><?=$data->tlp?></td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_member.php?member_id=<?=$data->member_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="proses.php?member_id=<?=$data->member_id ?>">Delete</a>
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