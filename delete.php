<center>
<?php
$id = (isset($_GET['id'])) ? $_GET['id'] : '' ;
if (!empty($id)) { 
$SQL = "DELETE FROM buku_tamu WHERE id=$id";
if (mysqli_query($MySQli,$SQL)) {
echo "berhasil hapus data buku tamu";
echo "<br>";
echo "<a href='?page=list'>OK</a>";
} else {
echo "Gagal hapus data buku tamu !!";
}
}else{
header("location:?page=list");
}
?>
</center>
