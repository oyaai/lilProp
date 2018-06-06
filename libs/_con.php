<?
// connect 06-06-2018
$dsn = "localhost";
$dbuser = "umarin2_oya";
$dbpwd = "oya@1925";

$conn = new PDO($dsn, $dbuser, $dbpwd);
$sql = "INSERT INTO egn_pacific VALUES('','$_REQUEST['name']','$_REQUEST['phone']','$_REQUEST['email']','$_REQUEST['company']','$_REQUEST['file']');";	
$result = $conn->prepare($sql);

$status = $result->execute();

$conn = null;
?>