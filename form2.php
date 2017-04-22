<?php


session_start();

require("connect.php");

if(isset($_POST['S1']))
{

	echo "<script>alert('check1')</script>";

	$mar_form=$_POST['mar'];
	$hindi_form=$_POST['hindi'];
	$eng_form=$_POST['eng'];
	$maths_form=$_POST['maths'];
	$sci_form=$_POST['sci'];
	$ss_form=$_POST['ss'];
	$m2_form=$_POST['m2'];
	$p1_form=$_POST['p1'];
	$p6_form=$_POST['p6'];
	$p7_form=$_POST['p7'];
	$p8_form=$_POST['p8'];
	$p38_form=$_POST['p38'];
	$totalm_form=$_POST['totalm'];
	$perct_form=$_POST['perct'];
	$result_form=$_POST['result'];

	$a=$_SESSION['seat'];




	$write=mysqli_query($_connect,"INSERT INTO form2 (seatno,mar,hindi,eng,maths,sci,ss,m2,p1,p6,p7,p8,p38,totalm,perct,result) VALUES ('$a','$mar_form','$hindi_form','$eng_form','$maths_form','$sci_form','$ss_form','$m2_form','$p1_form','$p6_form','$p7_form','$p8_form','$p38_form','$totalm_form','$perct_form','$result_form')") or die("sql error");

	echo "Successful insertion";


header("Location:http://localhost/10mks/10mks.php");






}

?>


<!DOCTYPE html>
<html>
<head>
<title>10th form 2</title>

<meta charset="UTF-8">
<meta name="description" content="10 Form2">
<meta name="keywords" content="HTML, CSS, XML, JavaScript">
<meta name="author" content="Yash Gupte">
<style>
.submit{
padding: 15px 80px;
background-color: #2196f3;
border-radius: 8px;
border: 2px solid #0d47a1;
}
.div1{
background:linear-gradient(to right,#2979ff,#bbdefb,#2979ff);
}
.div2{
background:linear-gradient(to right,#0091ea,#e1f5fe,#0091ea);
}

</style>



</head>
<body class="div2">
<h1><center> MARKS SCORED </center></h1>
<fieldset>
<legend>Enter the MARKS scored by student.</legend>


<center>
<form class="div1" name="form2"  action="form2.php" method="POST"   >

<table   border="0">
<tr>
<td>
	<table cellpadding="8" border="0" >
	<tr>
	<td>SUBJECTS</td>
	<td></td>
	<td>MARKS OBTAINED</td>
	</tr>
	<tr>
	<td>MARATHI</td>
	<td>:</td>
	<td><input type="text" name="mar" onkeyup="limit(this,3);" onkeydown="limit(this)" ></td>
	</tr>
	<tr>
	<td>HINDI</td>
	<td>:</td>
	<td><input type="text" name="hindi" onkeyup="limit(this,3);" onkeydown="limit(this)" ></td>
	</tr>
	<tr>
	<td>ENGLISH</td>
	<td>:</td>
	<td><input type="text" name="eng" onkeyup="limit(this,3);" onkeydown="limit(this)" ></td>
	</tr>
	<tr>
	<td>MATHS</td>
	<td>:</td>
	<td><input type="text" name="maths" onkeyup="limit(this,3);" onkeydown="limit(this)" ></td>
	</tr>

	<tr>
	<td>SCIENCE</td>
	<td>:</td>
		<td><input type="text" name="sci" onkeyup="limit(this,3);" onkeydown="limit(this)" ></td>
	</tr>

	<tr>
	<td>SOCIAL SCIENCES</td>
	<td>:</td>
	<td><input type="text" name="ss" onkeyup="limit(this,3);" onkeydown="limit(this)" ></td>
	</tr>


	</table>
</td>
<td>
	<table cellpadding="8" border="0">
	<tr>
	<td>INDEX NO. OF THE SUBJECTS</td>
	<td></td>
	<td>GRADE OBTAINED</td>
	</tr>
	<tr>
	<td><center>M2</center></td>
	<td>:</td>
	<td><input type="text" name="m2" >
	</td>
	</tr>
	<tr>
		<td><center>P1</center></td>
	<td>:</td>
	<td><input type="text" name="p1" >
	</td>
	</tr>
	<tr>
	<td><center>P6</center></td>
	<td>:</td>
	<td><input type="text" name="p6" >
	</td>
	</tr>

	<tr>
	<td><center>P7</center></td>
	<td>:</td>
	<td><input type="text" name="p7">
	</td>
	</tr>

	<tr>
	<td><center>P8</center></td>
	<td>:</td>
	<td><input type="text" name="p8">
	</td>
	</tr>

	<tr>
	<td><center>38</center></td>
	<td>:</td>
	<td><input type="text" name="p38">
	</td>
	</tr>


	</table>
</td>
</tr>
</table>
<br>
<input type="submit" name="S1" value="Submit" class="submit" > <input type="submit" name="cal" value="Calculate" class="submit" onclick="return myFunction();">  <input type="reset" onclick="validateinfo()" value="Reset" class="submit">
<br>
<br>
<table cellpadding="8">
	<tr>
	<td>TOTAL MARKS</td>
	<td>:</td>
	<td><input type="text" name="totalm"   ></td>
	</tr>

	<tr>
	<td>PERCENTAGE</td>
	<td>:</td>
	<td><input type="text" name="perct"></td>
	</tr>

	<tr>
	<td>RESULT</td>
	<td>:</td>
	<td><input type="text" name="result"></td>
	</tr>

</table>

</form>
</center>
</fieldset>

<script src="validate3.js"></script>


</body>
</html>
