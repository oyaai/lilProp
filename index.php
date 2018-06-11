<html>
<head>
	<title>A Simple of Pacific Prime.</title>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- CSS Framework -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
    $.ajax({
        url: './libs/result.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
                var name = response[i].name;
                var phone = response[i].phone;
                var email = response[i].email;
                var company = response[i].company;
				var file = response[i].file;
				
                var tr_str = "<div>" +
                    "<div>Result</div>" +
                    "<div>" + username + "</div>" +
                    "<div>" + name + "</div>" +
                    "<div>" + email + "</div>" +
					 "<div> <img src='/imgs/uploads/" + file + "></div>" +
                    "</div";

                $("#panel1").append(tr_str);
            }

        }
    });
});
</script>

<style>
.error {color: #FF0000;}
.modal {
    display: block; 
    position: fixed; 
    z-index: 1; 
    left: 500;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    padding-top: 60px;
}

</style>

</head>

<body >
<form id="frmMain" method="POST" action="/libs/_con.php">
		 <div class="container">
			<div class="row">
				<div >Name <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtName" name="txtName"> </div>
			</div>
			<div class="row">
				<div>Phone <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtPhone" name="txtPhone"  > </div>
			</div>
			<div class="row">
				<div>Email <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="email" size="30px" id="txtEmail" name="txtEmail"  ></div>
			</div>
			<div class="row">
				<div>Company <span style="color:red">*</span> </div>
			</div>
			<div class="row">
				<div><input type="text" size="30px" id="txtCompany" name="txtCompany" > </div>
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
					<button type="submit"  id="submit" class="btn btn-warning " style="width:300px;" >Submit</button>
				</div>
			</div>
		</div>				
	</form>
	<div id="panel1" class="modal">
		<span id="txtTest"></span>
	</div>

</body>
</html>
