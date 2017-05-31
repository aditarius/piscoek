
<title>Data Barang</title>
</head>
<body><center> <h2>Data Barang</h2>
<h2>tambah Barang</h2>
	<form action= "<?php echo base_url(). 'index.php/home/proses_insert'; ?>" method="post">
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