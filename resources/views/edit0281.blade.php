<!DOCTYPE html>
<html>
<head>
	<title>Edit Pelanggan</title>
</head>
<body>

	<h3>Edit Pelanggan</h3>
 
	<a href="/home"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($dataPelanggan as $p)
	<form action="/home/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama   <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Nama Barang :  <input type="text" required="required" name="barang" value="{{ $p->pegawai_jabatan }}"> <br/>
		Harga :<input type="number" required="required" name="harga" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat : <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>