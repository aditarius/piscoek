<table border="1">
<tr>
	<th>No</th>
	<th>Kode</th>
	<th>Nama</th>
	<th>Satuan</th>
	<th>Jumlah</th>
	<th>Harga</th>
	<th>kategori</th>
	<th>Update</th>
	<th>Delete</th>
</tr>
<?php $nomer=1; ?>
<?php foreach ($barang as $row) { ?>
<tr>
	<td><?php echo $nomer; ?></td>
	<td><?php echo $row->kode_barang; ?></td>
	<td><?php echo $row->nama_barang; ?></td>
	<td><?php echo $row->satuan; ?></td>
	<td><?php echo $row->jumlah; ?></td>
	<td><?php echo $row->harga; ?></td>
	<td><?php echo $row->kategori; ?></td>
	<td><a href="<?php echo base_url(); ?>index.php/home/update/<?php echo $row->kode_barang; ?>">Update</a></td>
	<td><a href="<?php echo base_url(); ?>index.php/home/delete/<?php echo $row->kode_barang; ?>">Delete</a></td>
</tr>
<?php $nomer++; } ?>
</table>
<a href="<?php echo base_url('index.php/home/insert'); ?>">Tambah Barang</a>

<?php
	$msg = "";
	if (isset($_POST['upload'])) {
		$target = "images/".basename($_FILES['image']['name']);
		$db = mysqli_connect("localhost", "root", "", "barang");
		$image = $_FILES['image']['name'];
		$text = $_POST['text'];
		$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image Uploaded Successfully";
		} else {
			$msg = "There Was A problem uploading image";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Image Upload</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="content">
		<?php
	
		$db = mysqli_connect("localhost", "root", "", "barang");
		$sql = "SELECT * FROM images";
		$result = mysqli_query($db, $sql);

		while ($row = mysqli_fetch_array($result)){
			echo "<div id = 'img_div'>";
			echo "<img src ='"."images/".$row['image']."'>";
				echo "<p>".$row['text']."</p>";
			echo "</div>";
		}
?>
			<form method="post" action="index.php" enctype="multipart/form-data">
				<input type="hidden" name="size" value="1000000" />
				<div>
					<input type="file" name="image" />
				</div>
				<div>
					<textarea name="text" cols="40" rows="4" placeholder="Say Something about This Image ..."></textarea>
				</div>
				<div>
					<input type="submit" name="upload" value="upload image">
				</div>
			</form>
		</div>
	</body>
</html>