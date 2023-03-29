
<?php
session_start();

?>
<html>
<head>
	<title>Display</title>
	<style>
		body
		{
			background: grey;
		}
		table
		{
			background-color: white;
		}
		.update
		{
			background-color: lightgrey;
			color: black;
			outline: black;
			border-radius: 5px;
			height: 22px;
			width: 80px;
			font-weight: bold;
			cursor: pointer;
		}
		.delete
		{
			background-color: orangered;
			color: black;
			outline: black;
			border-radius: 5px;
			height: 22px;
			width: 80px;
			font-weight: bold;
			cursor: pointer;
		}
	</style>
</head>
</html>
<?php
include("connectiondb.php");
error_reporting(0);
session_start();
$userprofile=$_SESSION['username'];
if($userprofile==true)
{

}
else
{
	header('location:./loginpage.php');
}

$query = "SELECT * FROM contact WHERE username='$userprofile'";
//$query="SELECT * FROM FORM WHERE email='$username';
$data  = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total != 0)
{	
	?>
	<h2 align="center">Displaying All Your Records</h2>
	<table border="1" cellspacing="7" width="">
		<tr>
		<th width="10%">contact name</th>
		<th width="10%">contact no.</th>
		</tr>
	

	<?php
	while ($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
		<td>".$result['contact']." </td>
		<td>".$result['contactname']."</td>
		</tr>
		 ";
	}
}
else
{
	echo"table has no records";
}
?>
</table>
