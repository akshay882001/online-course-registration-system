
<?php
echo"<html>
<head>

<title>Main Page</title>
</head>";

 session_start();	
 include("db_connect.php");


$amt=$_SESSION["ssfee"];
$_SESSION["amount"]=$amt;
echo"
<html>
<head>
<!-- <link rel='stylesheet' type='text/css' href='register.css'> -->
<link rel='stylesheet' type='text/css' href='pay.css'>
<title>Student Portal</title>
</head>
<body style=\"background-color: white;\">
<form name='f1' method='post' action='payvalid.php'>
<font size='4'>
<div class='split left'>
	<div class='centered'>
	Enter account number:<br><br>
	Enter password:<br><br>
	Amount:<br><br><br><br>
	<label id='l1' style=\"display:none\">This Process can't be undo,do you like to proceed:</label><br><br><br>
	</div>
	</div>
	<div class='split right'>
	<div class='centered'>
	<input type='number' name='acc' id='acc1' placeholder='Enter 0-9 10 digit number'required><br><br>
	<input type='password' name='password' id='p1' placeholder='Enter atleast 6 characters' required><br><br>
	<input type='number' name='am1' value=".$amt." disabled><br><br>
	<input type='button' value='Proceeed for payment'name='valid' onclick='checkdetails()' id='b2' class=\"registerbtn\"><br><br>
	<input type='submit' value='Yes,Make Payment!' name='pay' id='b1' style=\"display:none\" class=\"registerbtn\" disabled>
	</div>
</div>
</font>
</form>
</body>
<script>
var flag=0;
function checkdetails(){
	var ac=document.f1.acc.value;
	var p=document.f1.password.value;
	if(ac.length!=10 || ac<0){
		alert('Enter valid account number');
	}
	else if(p.length<6){
		alert('Eneter valid password');
	}
	else{
		var a1=document.getElementById('acc1').readOnly=true;
        var p=document.getElementById('p1').readOnly=true;
		var x2=document.getElementById('b2');
		x2.style.display='none';
		var x = document.getElementById('l1');
		if (x.style.display === 'none') {
			x.style.display = 'block';
		}
		var x1 = document.getElementById('b1');
		if(x1.style.display === 'none') {
			x1.style.display = 'block';
		}
		var bt=document.getElementById('b1');
		bt.disabled=false;
	}
}
/*function checkacc(){
	var acc1=document.f1.acc.value;
	if(acc1.length!=10 || acc1<0){
		document.f1.acc.value='';
		alert('account number should be 0-9 digits of length 10');
		flag=1;
	}
	else{
		flag=0;
	}
}
function checkpsw(){
	var p1=document.f1.password.value;
	if(p1.length<6){
		document.f1.password.value='';
		alert('password length should be atleast 6');
	}
}*/
</script>
</html>
";
?>