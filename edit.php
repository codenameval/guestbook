<?php
$id=$_GET['id'];
$SQL ="SELECT * FROM buku_tamu WHERE id = $id";
$data=mysqli_query($MySQli,$SQL);
$d = mysqli_fetch_array($data);
?>

<form method="POST" action="">
<div>
<table>
<thead>
<tr>
<th>EDIT DATA</th>
</tr>
</thead>
<tbody>
<tr>
<td>NAMA</td>
</tr>
<tr>
<td><input type="text" value="<?= $d['nama'] ?>" name="nama"></td>
</tr>
<tr>
<td>NO HP</td>
</tr>
<tr>
<td><input type="text" value="<?= $d['no_hp'] ?>" name="no_hp"></td>
</tr>
<tr>
<td>EMAIL</td>
</tr>
<tr>
<td><input type="text" value="<?= $d['email'] ?>" name="email"></td>
</tr>
<tr>
<td>ALAMAT</td>
</tr>
<tr>
<td><input type="text" value="<?= $d['alamat'] ?>" name="alamat"></td>
</tr>
<tr>
<td>WEBSITE</td>
</tr>
<tr>
<td><input type="text" value="<?= $d['website'] ?>" name="website"></td>
</tr>
<tr>
<td>pesan</td>
</tr>
<tr>
<td>
<textarea class="pesan"  name="pesan"><?= $d['pesan'] ?></textarea>
</td>
</tr> 
</tbody>
<tfoot>
<tr>
<td>
<input type="submit" value="SIMPAN">
</td>
</tr> 
</tfoot>
</table>
</div>
</form>
<center>

<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
$NAMA = $_POST['nama'];
$NOHP = $_POST['no_hp'];
$TGLWKTPOSTING = date('Y-m-d h:i:sa');
$EMAIL = $_POST['email'];
$ALAMAT = $_POST['alamat'];
$WEBSITE = $_POST['website'];
$pesan = $_POST['pesan'];

$SQL = "UPDATE buku_tamu SET nama='$NAMA',no_hp='$NOHP',tgl_wkt_posting='$TGLWKTPOSTING', email='$EMAIL', alamat='$ALAMAT', website='$WEBSITE',pesan='$pesan' WHERE id='$id'";

if (mysqli_query($MySQli,$SQL)) {
header("location:?page=list");
} else {
echo "Gagal edit data buku tamu !!";
}
}
?>
</center>
