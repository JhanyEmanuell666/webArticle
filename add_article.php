<?php
include "koneksi.php";
$query_id = mysqli_query($db, "SELECT max(articleID) as idTerbesar FROM articles");
$dt = mysqli_fetch_array($query_id);
$Id = $dt['idTerbesar'];
$urutan =(int) substr($Id, 0);
$urutan++;
$hasil_id = sprintf($urutan);
$judul= $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$isi = $_POST['content'];
$time=date("d M Y, H:i");
$lead = str_replace("\r\n","<br>",$lead);
$content = str_replace("\r\n","<br>",$isi);
$query2 = "INSERT INTO articles(articleID,judul,penulis,lead,content,waktu)VALUES('$hasil_id','$judul','$penulis','$lead','$isi','$time')";
$result = mysqli_query($db, $query2);
if ($result){
	echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
	echo "<A href=\"tampil_articles.php\">List</A>";
}
else{
	echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
?>