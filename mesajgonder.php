<?php include './vt.php'; ?>
<?php 
    $kullanici=$_POST['k'];
    $mesaji=$_POST['m'];
	$query = $db->prepare("INSERT INTO mesajlar SET
kadi = ?,
mesaj = ?");
$insert = $query->execute(array(
     $kullanici, $mesaji
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "İşlem başarılı!";
}
else{
    print "İşlem başarısız!";
}
		?>