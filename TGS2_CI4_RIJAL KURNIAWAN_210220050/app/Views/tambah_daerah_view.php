<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	   <!-- Required meta tags -->
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Tambah Daerah</title>
</head>
<body>
<br/>
    <h3>TAMBAH DAERAH</h3>
	<br/>
    <form action="/daerah/insert" method="post">
    <table>
			<tr>
				<td>Nama Daerah</td>
                <input type="hidden" name="id_daerah" value="<?= $product->id_daerah;?>">
				<td><input type="text" name="nama_daerah" value="<?= $product->nama_daerah;?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?= $product->status;?>"></td>
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