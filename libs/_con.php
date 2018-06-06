<?
// connect 06-06-2018
$dsn = "mysql:dbname=umarin2_egn;host=localhost";
$dbuser = "umarin2_oya";
$dbpwd = "oya@1925";

$url = 'http://pacificprime.egnserv.com/';

$conn = new PDO($dsn, $dbuser, $dbpwd);
$sql = "INSERT INTO egn_pacific VALUES('','".$_REQUEST['name']."','".$_REQUEST['phone']."','".$_REQUEST['email']."','".$_REQUEST['company']."','".$_REQUEST['file']."');";	
echo $sql;
break;

$result = $conn->prepare($sql);

$status = $result->execute();

$conn = null;
?>
