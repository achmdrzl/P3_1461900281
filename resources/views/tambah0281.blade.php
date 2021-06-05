<!DOCTYPE html> 
<html> 
    <head> 
    </head> 
    
    <body>  
        <h3>Data Pelanggan</h3> 
        <a href="/home"> Kembali</a> 
        <br/> 
        <br/> 
        <form action="/home/store" method="post">
            {{ csrf_field() }} 
            Nama :     <input type="text" name="nama" required="required"> 
            <br /> 
            Nama Barang :   <input type="text" name="barang" required="required"> 
            <br /> 
            Harga :  <input type="text" name="harga" required="required"> 
            <br /> 
            Alamat  <textarea name="alamat" required="required"></textarea> 
            <br /> 
            <input type="submit" value="Simpan Data"> 
        </form> 
    </body> 
</html>