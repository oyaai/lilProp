<html>
<head>
	<title>A Simple of Pacific Prime.</title>
<!-- ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- CSS Framework -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<style>
.error {color: #FF0000;}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 500;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    padding-top: 60px;
}

</style>

</head>
<body >
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["txtName"])) {
    $nameErr = "Name is required";
  } else {
    $name = tinput($_POST["txtName"]);
  }
if (empty($_POST["txtPhone"])) {
    $phoneErr = "Name is required";
  } else {
    $name = tinput($_POST["txtPhone"]);
  }
if (empty($_POST["txtEmail"])) {
    $emailErr = "Name is required";
  } else {
    $name = tinput($_POST["txtEmail"]);
  }
if (empty($_POST["txtCompany"])) {
    $companyErr = "Name is required";
  } else {
    $name = tinput($_POST["txtCompany"]);
  }
if (empty($_POST["txtFile"])) {
    $fileErr = "Name is required";
  } else {
    $name = tinput($_POST["txtFile"]);
  }
}

function tinput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form name="frmMain" id="frmMain" method="POST" action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>">
		<div class="container">
			<div class="row">
				<div >Name <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtName" name="txtName"> <span class="error"><?php echo $nameErr;?></span></div>
			</div>
			<div class="row">
				<div>Phone <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtPhone" name="txtPhone"  > <span class="error"><?php echo $phoneErr;?></span></div>
			</div>
			<div class="row">
				<div>Email <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="email" size="30px" id="txtEmail" name="txtEmail"  > <span class="error"><?php echo $emailErr;?></span></div>
			</div>
			<div class="row">
				<div>Company <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtCompany" name="txtCompany" > <span class="error"><?php echo $companyErr;?></span></div>
			</div>
			<div class="row">
				<div>Company logo upload <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="file" size="30px"  id="txtFile" name="txtFile"  ></div>
			</div>
			<div class="row"></br></div>
			<div class="row">
				<div >
					<button type="submit" name="submit" id="submit" class="btn btn-warning " style="width:300px;" >Submit</button>
				</div>
			</div>
		</div>			
	</form>
	<div id='panel1' class='modal'>
		<div class="row">Result</div>
		<div class="row"></div>
		<div class="row"></div>
		<div class="row"></div>
		<div class="row"></div>
	</div>
<script>

$(document).on('submit','form',function(){
   // code
	 document.getElementById('panel1').style.display = 'block';
});

</script>

</body>
</html>
