<?php include './vt.php'; ?>
<style>
body{
	font-family: monospace;
	wordwrap: break-word;
	white-space: pre-wrap;
	margin: 1em 0px;
}
</style>
<body>
[
	<p>&nbsp;&nbsp;{</p><p>&#09;"id" : 0,</p><p>&#09;"ad" : "Sistem"</p><p>&#09;"mesaj" : "Uygulamaya Hoşgeldiniz!"</p><p>&nbsp;&nbsp;},</p>
<?php
	$query = $db->query("SELECT * FROM mesajlar ORDER BY id", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $sirala ){
		 print '<p>&nbsp;&nbsp;{</p><p>&#09;"id" : '.$sirala[id].',</p><p>&#09;"ad" : "'.$sirala[kadi].'",</p><p>&#09;"mesaj" : "'.$sirala[mesaj].'"</p><p>&nbsp;&nbsp;},</p>';
	 }
}
	?>
]
</body>