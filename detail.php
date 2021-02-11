<?php 
$id=$_GET['id'];
$SQL ="SELECT * FROM buku_tamu WHERE id = $id";
$data=mysqli_query($MySQli,$SQL);
$d = mysqli_fetch_array($data);
 
?>
<div>
<table>
<thead>
<tr>
<th>DETAIL DATA</th>
</tr>
</thead>
<tbody>
<tr>
<td>No</td>
</tr>
<tr>
<td><input disabled  type="text" value="<?= $d['id'] ?>" name="nama"></td>
</tr>
<tr>
<td>Nama</td>
</tr>
<tr>
<td><input disabled  type="text" value="<?= $d['nama'] ?>" name="nama"></td>
</tr>
<tr>
<td>Email</td>
</tr>
<tr>
<td><input disabled type="text" value="<?= $d['email'] ?>" name="email"></td>
</tr>
<tr>
<td>Website</td>
</tr>
<tr>
<td><input disabled type="text" value="<?= $d['website'] ?>" name="website"></td>
</tr>
<tr>
<td>Pesan</td>
</tr>
<tr>
<td>
<textarea disabled class="pesan"  name="pesan"><?= $d['pesan'] ?></textarea>
</td>
</tr> 
</tbody>
</table>
</div>
