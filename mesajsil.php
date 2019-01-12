<?php include './vt.php'; ?>
<?php
$query = $db->prepare("DELETE FROM mesajlar WHERE id = :id");
$delete = $query->execute(array(
   'id' => $_POST[id]
));
if($delete){
	print "Mesaj Silindi!";
}else{
	print "Mesaj Silinemedi!";
}
?>