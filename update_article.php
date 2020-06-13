<?php
include "koneksi.php";
$ID = $_POST['ID'];
$tittle = $_POST['title'];
$author = $_POST['author'];
$abstraksi = $_POST['abstraksi'];
$content = $_POST['content'];
$waktu=date("d M Y, H:i");
//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);

$update="UPDATE articles SET judul='$tittle', penulis='$author',lead='$abstraksi',content='$content',waktu='$waktu' WHERE articleID ='$ID'";
$hasil=mysqli_query($db,$update);
if($hasil){
	echo "Artikel berhasil di update<br>";
	echo "<a href=\"tampil_articles.php\">List</a>";
}
else{
		echo "Artikel gagal di update";
	}
?>
