
<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Mahasiswa</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
<ul>
  <li> <a href="/home">Home</a>

  <li> <a href="/home/create">Tambah Data</a>
  <li> <a href="">Cari Data</a>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
<div style="overflow-x:auto;">

<table>
<thead>
    <tr>
    <th>No</th> 
    <th>Nama</th>
    <th>Alamat</th>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($data as $dataPelaggan)
    <tr>    
    <td>{{$dataPelaggan -> no}}</td>
    <td>{{$dataPelaggan -> nama}}</td>
    <td>{{$dataPelaggan -> alamat}}</td>
    <td>{{$dataPelaggan -> barang}}</td>
    <td>{{$dataPelaggan -> harga}}</td>
    <td> <a href="/home/edit/{{ $p->id }}"> Edit </a>
         <a href="/home/hapus/{{ $p->id }}"> Hapus </a>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</body>
