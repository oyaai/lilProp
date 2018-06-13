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
	if($_FILES["txtFile"]["name"] == ""){
		$name .= " File ";
		$vflag = 1; 
		
	}

	//echo $vflag;
	if($vflag == 1 ){
		echo "<script type='text/javascript'>alert('Enter ".$name."');window.location.href='".uri."';</script>";
	}
	

	if($vflag == 0 || $vflag == -1 ){
	if($_FILES["txtFile"]["name"]){
		$fileName = mb_convert_encoding($_FILES["txtFile"]["name"], "UTF-8");
		//$fileName = date("Ymd").".jpg";
	}
	$dir_upload = "../imgs/uploads/";
	$upload = $dir_upload . $_FILES["txtFile"]["name"];

	move_uploaded_file($_FILES["txtFile"]["tmp_name"],$upload);


	$sql = "INSERT INTO egn_pacific VALUES('','".$_REQUEST['txtName']."','".$_REQUEST['txtPhone']."','".$_REQUEST['txtEmail']."','".$_REQUEST['txtCompany']."','".$fileName."');";	

	$result = $conn->prepare($sql);

	$status = $result->execute();


		if($status){
			echo "<script type='text/javascript'>alert('Complete!');window.location.href='".url."';</script>";
			//header( "Location: ".url );
		}else{
			
			header( "Location: ".uri );
			
		}
		
	}
}else{
	header( "Location: ".uri );
	
}

$conn = null;
?>
