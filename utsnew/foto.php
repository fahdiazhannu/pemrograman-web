<?php include "header.php"
?>

	<?php include"koneksi.php"

	?>
	
	<div class="container body">
		<?php
		$id = $_GET['id'];
		$query = $conn->query("SELECT * FROM gallery WHERE id='$id'") or die($conn->error);
		if($query->num_rows){
			$row = $query->fetch_assoc();
			echo '
			<h1>Informasi foto</h1>
			<div class="row">
				<div class="col-md-8">
					<img src="img/'.$row['gambar'].'" class="img-responsive" width="700">
				</div>
				<div class="col-md-4">
					<table class="table">
						<tr>
							<th width="120">Ukuran File</th>
							<td>'.$row['gambar'].'</td>
						</tr>
						<tr>
							<th>Ukuran File</th>
							<td>';
							$size = filesize("img/".$row['gambar']);
							$size = $size / 1024 / 1024;
							echo number_format($size, 2).' MB';
							echo '</td>
						</tr>
						<tr>
							<th>Ekstensi File</th>
							<td>'; echo pathinfo($row['gambar'], PATHINFO_EXTENSION); echo '</td>
						</tr>
						<tr>
							<th>Dimensi File</th>
							<td>'; 
							list($width, $height) = getimagesize("img/".$row['gambar']); 
							echo $width . "x" . $height;
							echo '</td>
						</tr>
						<tr>
							<td colspan="2"><a href="img/'.$row['gambar'].'" class="btn btn-primary btn-block">Download</a></td>
						</tr>
					</table>
				</div>
			</div>
			';
		}else{
			echo '404 Not Found!';
		}
		?>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>