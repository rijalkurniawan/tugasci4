<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	   <!-- Required meta tags -->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tambah Pengguna</title>
</head>
<body>
    <br/>
    <h3>TAMBAH PENGGUNA</h3>
	<br/>
    <form action="/pengguna/insert" method="post">
    <table>
			<tr>
				<td>Email</td>
                <input type="hidden" name="id_pengguna" value="<?= $product->id_pengguna;?>">
				<td><input type="email" name="email" value="<?= $product->email;?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?= $product->nama;?>"></td>
			</tr>
            <tr>
				<td>Verifikasi</td>
				<td><input type="text" name="verifikasi" value="<?= $product->verifikasi;?>"></td>
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