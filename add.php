<form action="" method="POST">
<div>
<table>
<thead>
<tr>
<th>TAMBAH DATA BARU</th>
</tr>
</thead>
<tbody>
<tr>
<td>Nama</td>
</tr>
<tr>
<td><input required type="text" name="nama"></td>
</tr>
<tr>
<td>Nomor Handphone</td>
</tr>
<tr>
<td><input required type="text" name="no_hp"></td>
</tr>
<tr>
<td>Email</td>
</tr>
<tr>
<td><input required type="text" name="email"></td>
</tr>
<tr>
<td>Alamat</td>
</tr>
<tr>
<td><input required type="text" name="alamat"></td>
</tr>
<tr>
<td>Website</td>
</tr>
<tr>
<td><input required type="text" name="website"></td>
</tr>
<tr>
<td>Pesan</td>
</tr>
<tr>
<td>
<textarea required class="pesan"  name="pesan"> </textarea>
</td>
</tr> 
</tbody>
<tfoot>
<tr>
<td>
<input  type="submit" value="SIMPAN" name="">
<input  type="reset" value="RESET" name="">
</td>
</tr> 
</tfoot>
</table>
</div>
</form>
<center>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nama = $_POST['nama'];
$hp = $_POST['no_hp'];
$tgl = date("Y-m-d h:i:sa");
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$website = $_POST['website'];
$pesan = $_POST['pesan'];
$SQL = "INSERT INTO buku_tamu(nama,no_hp,tgl_wkt_posting,email,alamat,website,pesan)
VALUES('$nama','$hp','$tgl','$email','$alamat','$website','$pesan')";
if (mysqli_query($MySQli,$SQL)) {
header("location:?page=list");
} else {
echo "Gagal menambahkan data buku tamu !!";
}
}
?>
</center>
