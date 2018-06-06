<html>
<head>
	<title>A Simple of Pacific Prime.</title>
<!-- ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Validate field -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

<!-- CSS Framework -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script>
$("button").click(function(){
    $.post("./libs/_con.php",
    {
        name: document.getElementById('txtName').value,
        phone: document.getElementById('txtPhone').value,
		email: document.getElementById('txtEmail').value,
		company: document.getElementById('txtCompany').value,
		file: document.getElementById('txtFile').value
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});
</script>

<!-- Style-->
<style>
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 600;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    padding-top: 60px;
}
</style>

</head>
<body >
	<form name="frmMain" id="frmMain" method="POST" action="./libs/_con.php">
		<div class="container">
			<div class="row">
				<div >Name <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtName" name="txtName"></div>
			</div>
			<div class="row">
				<div>Phone <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtPhone" name="txtPhone"></div>
			</div>
			<div class="row">
				<div>Email <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtEmail" name="txtEmail"></div>
			</div>
			<div class="row">
				<div>Company <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtCompany" name="txtCompany"></div>
			</div>
			<div class="row">
				<div>Company logo upload <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="file" size="30px"  id="txtFile" name="txtFile" ></div>
			</div>
			<div class="row"></br></div>
			<div class="row">
				<div >
					<button type="button" class="btn btn-warning " onclick="document.getElementById('panel1').style.display='block'" style="width:300px;" >Submit</button>
				</div>
			</div>
		</div>
		<div id="panel1" class="modal">
			<div>
				<table>
					<tr>
						<td><h4>Result</h4></td>
						
					</tr>
					<?php 
						print_r($_POST);
						foreach ($_POST as $key => $value) {
							echo "<tr>";
							echo "<td>" .$value. "</td>" ;
							echo "</tr>";
							echo "<tr>";
							echo "<td>" .$value. "</td>" ;
							echo "</tr>";
							echo "<tr>";
							echo "<td>" .$value. "</td>" ;
							echo "</tr>";
							echo "<tr>";
							echo "<td>" .$value. "</td>" ;
							echo "</tr>";
							echo "<tr>";
							echo "<td>" .$value. "</td>" ;
							echo "</tr>";
							echo "<tr>";
							echo "<td> <img src= '" .$value. "'></td>" ;
							echo "</tr>";
						}
					?>
</table>
			
			</div>
		</div>
				
	</form>
<script>
// Get the modal
var modal = document.getElementById('panel1');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>