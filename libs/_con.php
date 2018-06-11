<?php
require ("_conn.php");
//$conn = new _conn();
$dsn = "mysql:dbname=umarin2_egn;host=localhost";
$dbuser = "umarin2_oya";
$dbpwd = "oya@1925";

$conn = new PDO($dsn, $dbuser, $dbpwd);
$vflag = -1; 
$name = "";

if(isset($_POST)){

	if($_REQUEST['txtName']==""){
		$name .= " Name ";
		$vflag = 1; 
	}
	if($_REQUEST['txtPhone'] == ""){
		$name .= " Phone ";
		$vflag = 1; 
		
	}
	if($_REQUEST['txtEmail'] == ""){
		$name .= " Email ";
		$vflag = 1; 
		
	}
	if($_REQUEST['txtCompany'] == ""){
		$name .= " Company ";
		$vflag = 1; 
		
	}
	if($_REQUEST['txtFile'] == ""){
		$name .= " File ";
		$vflag = 1; 
		
	}

	echo $vflag;
	if($vflag == 1 ){
		echo "<script type='text/javascript'>alert('Enter ".$name."');window.location.href='".uri."';</script>";
		
	}
	

	if($vflag == 0 || $vflag == -1 ){
	$fileName = $_POST["txtFile"];
	$dir_upload = "/imgs/uploads/";
	$upload = $dir_upload . basename($_FILES["txtFile"]);

	$sql = "INSERT INTO egn_pacific VALUES('','".$_REQUEST['txtName']."','".$_REQUEST['txtPhone']."','".$_REQUEST['txtEmail']."','".$_REQUEST['txtCompany']."','".$fileName."');";	

	$result = $conn->prepare($sql);

	$status = $result->execute();


		if($status){

			header( "Location: ".url );
		}else{
			
			header( "Location: ".uri );
			
		}
		
	}
}else{
	header( "Location: ".uri );
	
}

$conn = null;
?>
