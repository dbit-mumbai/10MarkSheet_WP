<?php


session_start();

require("connect.php");

if(isset($_POST['submit']))
{
  $fname_form=$_POST['fname'];
  $mname_form=$_POST['mname'];
  $lname_form=$_POST['lname'];
  $moname_form=$_POST['moname'];
  $db_form=$_POST['db'];
  $seatno_form=$_POST['seatno'];
  $centerno_form=$_POST['centerno'];
  $dnsno_form=$_POST['dnsno'];
  $month_form=$_POST['emonth'];
  $srno_form=$_POST['srno'];


    $write=mysqli_query($_connect,"INSERT INTO form1 (fname,mname,lname,moname,divb,seatno,centerno,dnsno,emonth,srno) VALUES ('$fname_form','$mname_form','$lname_form','$moname_form','$db_form','$seatno_form','$centerno_form','$dnsno_form','$month_form','$srno_form')") or die("sql error");

    echo "Successful insertion";


$_SESSION['seat']=$seatno_form;

header("Location:http://localhost/10mks/form2.php");








/*  $extract=mysqli_query($_connect,"SELECT * FROM form1 ") or die ("Unable to extract");
  $numrows=mysqli_num_rows($extract);

if($numrows!=0)
  {

      while ($rows=mysqli_fetch_assoc($extract))
      {


        $dbfname=$rows['fname'];
        $dbmname=$rows['mname'];
        $dblname=$rows['lname'];
        $dbdivb=$rows['divb'];
        $dbseatno=$rows['seatno'];
        $dbcenterno=$rows['centerno'];
        $dbmonth=$rows['emonth'];
        $dbsrno=$rows['srno'];


        $write=mysqli_query($_connect,"INSERT INTO form1 VALUES ('$fname_form','  $mname_form','$lname_form','$db_form','$seatno_form','$centerno_form','  $month_form','','$srno_form')") or die("sql error");







      }*/

  }




 ?>



<!DOCTYPE html>
<html>
<head>
<title>10th form</title>

<meta charset="UTF-8">
<meta name="description" content="10 Form">
<meta name="keywords" content="HTML, CSS, XML, JavaScript">
<meta name="author" content="Yash Gupte">
<style>
.div1 {
     background: linear-gradient(to right, #424242 , #e0e0e0,#424242 );
}
.div2 {
      background: linear-gradient(to right,#212121, #eceff1,#212121 );
}
.fclr
{
color:white;
}
.submit{
padding: 15px 80px;
border-radius: 8px;
border: 2px solid #263238;
}
</style>


</head>
<body class="div2">


<h1><center> 10th MARKSHEET FORM </center></h1>
<fieldset >
<legend class="fclr">10th MARKSHEET FORM</legend>
<center>
<form class="div1" name="form" action="form.php" method="POST">
<table cellpadding="8" border="0" >
<tr>
<td>FIRST NAME</td>
<td>:</td>
<td><input type="text" name="fname"></td>
</tr>
<tr>
<td>MIDDLE NAME</td>
<td>:</td>
<td><input type="text" name="mname"></td>
</tr>
<tr>
<td>LAST NAME</td>
<td>:</td>
<td><input type="text" name="lname"></td>
</tr>
<tr>
<td>MOTHER'S NAME</td>
<td>:</td>
<td><input type="text" name="moname"></td>
</tr>
<tr>
<td>DIVISIONAL BOARD</td>
<td>:</td>
<td><select name="db">
<option value="no" checked >--SELECT DIV BOARD--</option>
<option value="mumbai">MUMBAI</option>
<option value="pune">PUNE</option>
<option value="nagpur">NAGPUR</option>
<option value="aurangabad">AURANGABAD</option>
<option value="kolhapur">KOLHAPUR</option>
<option value="nashik">NASHIK</option>
<option value="latur">LATUR</option>
<option value="amravati">AMRAVATI</option>
<option value="konkan">KONKAN</option>
</select>
</td>
</tr>

<tr>
<td>SEAT NO.</td>
<td>:</td>
<td><input type="text" name="seatno" onkeyup="limit(this,7);" onkeydown="limit(this)" ></td>
</tr>

<tr>
<td>CENTER NO.</td>
<td>:</td>
<td><input type="text" name="centerno" onkeyup="limit(this,4);" onkeydown="limit(this)"></td>
</tr>

<tr>
<td>DISTRICT AND SCHOOL NO.</td>
<td>:</td>
<td><input type="text" name="dnsno"></td>
</tr>

<tr>
<td>MONTH AND YEAR OF EXAM</td>
<td>:</td>
<td><input type="month" name="emonth"></td>
</tr>

<tr>
<td>SR. NO. OF STATEMENT</td>
<td>:</td>
<td><input type="text" name="srno" onkeyup="limit(this,6);" onkeydown="limit(this)"></td>
</tr>


<tr>
<td colspan="3"><center>  <input type="submit" name="submit" onsubmit="myFunction()" value="Submit" class="submit" onclick="myFunction()">  <input type="reset" onclick="validateinfo()" value="Reset" class="submit"></center></td>
</tr>
</table>

</form>
</center>
</fieldset>






 <script src="validate1.js"></script>






</body>
</html>
