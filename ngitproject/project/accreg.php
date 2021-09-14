<?php
echo"
<html>
<head>
<link rel='stylesheet' type='text/css' href='pay.css'>
<title>Student portal</title>
</head>
<body>
<form name='f2' method='post' action='accregval.php'>
<font size='4'>
<div class='split left'>
	<div class='centered'>
	Enter account number:<br><br>
	Enter password:<br><br>
	Confirm password:<br><br><br><br>
	<label id='ll1' style=\"display:none\">This Process can't be undo,do you like to proceed:</label><br><br><br>
	</div>
	</div>
	<div class='split right'>
		<div class='centered'>
		<input type='number' name='ac1' id='a1' placeholder='Eneter 0-9 10 digit number' required><br><br>
		<input type='password' name='pass' id='p1' placeholder='Enter atleast 6 characters' required><br><br>
		<input type='password' name='cp' id='c1' placeholder='Repeat password' required><br><br>
		<input type='button' name='v1' id='bb1' value='confirm details' onclick='checkdet()'><br><br>
		<input type='submit' name='s1' id='bb2' value='submit details' style=\"display:none\" disabled><br><br>
		</div>
	</div>
</div>
</font>
</form>
<script>
function checkdet(){
	var d1=document.f2.ac1.value;
	var d2=document.f2.pass.value;
	var d3=document.f2.cp.value;
	console.log(d1);
	console.log(d2);
	console.log(d3);
	if(d1.length!=10 || d1<0){
		alert('Eneter valid account number');
	}
	else if(d2.length<6 || d3.length<6){
		if(d2.length<6){
			alert('Enter valid password');
		}
		else{
			alert('Eneter valid password for confirm password');
		}
	}
	else if(d2!=d3){
		alert('password and confirm password didnt match');
	}
	else{
		var d4=document.getElementById('a1').readOnly=true;
		var d5=document.getElementById('p1').readOnly=true;
		var d6=document.getElementById('c1').readOnly=true;
		var d7=document.getElementById('bb1');
		d7.style.display='none';
		var d8=document.getElementById('ll1');
		if(d8.style.display=='none'){
			d8.style.display='block';
		}
		var d9=document.getElementById('bb2');
		if(d9.style.display=='none'){
			d9.style.display='block';
		}
		d9.disabled=false;
	}
}
</script>
</body>
</html>
";
?>