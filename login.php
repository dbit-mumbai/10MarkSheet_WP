
<?php


session_start();

require("connect.php");



if(isset($_POST['submit']))
{

	  $fname_form=$_POST['fname'];
    $lname_form=$_POST['lname'];
    $seatno_form=$_POST['seatno'];


    $extract = mysqli_query($_connect,"SELECT * FROM form1 WHERE seatno='$seatno_form' ")or die ("Unable to  extract");

    echo "<br>";
  //  echo mysqli_num_rows($extract);
    echo "<br>";
    echo "<br>";

    $numrows=mysqli_num_rows($extract);

    if($numrows!=0)
    {

      while ($rows=mysqli_fetch_assoc($extract))
      {
          $dbseatno=$rows['seatno'];


          if($seatno_form==$dbseatno)
          {
            echo ("Login Successfull!");
            header("Location:http://localhost/10mks/10mks.php");

          }
          else
           {
              echo ("Enter correct Seat Number");
            }
      }
    }


}


?>




<html>
<head>
	<title>LOGIN</title>

<style>










</style>






</head>
<body>
	<filedset>
		<center>
<form method="POST">
	<h3>LOGIN</h3>
	<table>
	<tr>
		<td>Enter seat number</td>
      <td>:</td>
    <td><input type="text" name="seatno" id="seatno"></td>
    </tr>
    <tr>
      <td>First Name</td>
        <td>:</td>
      <td><input type="text" name="fname" id="seatno"></td>
    </tr>
    <tr>
      <td>Last Name</td>
        <td>:</td>
      <td><input type="text" name="lname" id="seatno"></td>
    </tr>
    <tr>
      <td></td>
    	<td><center><input type="submit" value="GET RESULT" name="submit"></center></td>
      <td></td>
    </tr>
	<tr>
	</table>
</form>
</center>
</filedset>
</body>
</html>
