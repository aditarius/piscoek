<html>
	<head>
		<title>Tampil Barang</title>
	</head>
<body>
<a href="<?php echo base_url().'centrybarang/tambahdata';?>">Tambah Data</a>
<a href="<?php echo base_url().'index.php/cbarang/index';?>">contact us</a>
<a href="<?php echo base_url().'index.php/cbarang/input';?>">contact us</a>
<?php
	echo "<br><br>";

	echo "<table border='1'>
			<tr><th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Satuan</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Kategori</th>
			</tr>";
			$no=1;
			foreach($barang as $b)
			{
			echo "<tr>
			<td>$no</td>
			<td>$b->kode_barang</td>
			<td>$b->nama_barang</td>
			<td>$b->satuan</td>
			<td>$b->jumlah</td>
			<td>$b->harga</td>
			<td>$b->kategori</td>
			
			</tr>";
	$no++;}
	echo "</table>";
	?>
  <h2>tambah Barang</h2>
	<form action= "<?php echo base_url(). 'centrybarang/tambahdata'; ?>" method="post">
    <table>
        <tr>
            <th>kode</th>
            <td><input name="kode_barang" type="text"></td>
        </tr>
        
        <tr>
            <th>Nama</th>
            <td><input name="nama_barang" type="text"></td>
        </tr>
        <tr>
            <th>satuan</th>
            <td><input name="satuan" type="text"></td>
        </tr>      
		<tr>
            <th>jumlah</th>
            <td><input name="jumlah" type="text"></td>
        </tr>  
		<tr>
            <th>harga</th>
            <td><input name="harga" type="text"></td>
        </tr>  
		<tr>
            <th>kategori</th>
            <td><input name="kategori" type="text"></td>
        </tr>  
    </table>
    <input type="submit" value="simpan" />
</form>
	</body>
	</html>
	
