<?php
require ("_conn.php");
//echo 'post_max_size = ' . ini_get('post_max_size') . "\n";

$dsn = "mysql:dbname=umarin2_egn;host=localhost";
$dbuser = "umarin2_oya";
$dbpwd = "oya@1925";

$conn = new PDO($dsn, $dbuser, $dbpwd);

	$q = "SELECT * FROM egn_pacific ORDER BY id DESC LIMIT 1";
	$re = $conn->prepare($q);
	$re->execute();
	
	//$turn = $re->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);
	

	while($turn = $re->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
		$data .= "	<div><h1>Result</h1></div>
						<div>" . $turn[1] . "</div>
						<div>" . $turn[2] . "</div>
						<div>" . $turn[3] . "</div>
						<div>" . $turn[4] . "</div>
						<div><img src='/imgs/uploads/" . $turn[5] . "' width='10%'></div>";
		
	}
	echo $data;


?>
