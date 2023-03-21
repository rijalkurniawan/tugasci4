<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	   <!-- Required meta tags -->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tambah Berita</title>
</head>
<body>
<br/>
    <h3>TAMBAH BERITA</h3>
	<br/>
    <form action="/berita/insert" method="post">
    <table>
			<tr>
				<td>Judul Berita</td>
                <input type="hidden" name="id" value="<?= $product->id;?>">
				<td><input type="text" name="judul" value="<?= $product->judul;?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?= $product->tanggal;?>"></td>
			</tr>
            <tr>
				<td>Isi Berita</td>
				<td><input type="text" name="isi" value="<?= $product->isi;?>"></td>
			</tr>
			<tr>
				<td></td>
				<td> <button type="submit">Tambah</button></td>
			</tr>
		</table>
    </form>
</body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>