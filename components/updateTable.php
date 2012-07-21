<?php
session_start();

$host=$_ENV['OPENSHIFT_DB_HOST']; // Host name 
$username="admin"; // Mysql username 
$password="8idbLqwEbrZQ"; // Mysql password 
$db_name="fourtell"; // Database name 
$tbl_name="users"; // Table name 
$tbl_tells="tells"; // Table name 
$tbl_checkins="checkins"; // Table name 


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


if ($_REQUEST['adddel'] == 'add')
{
	$fsid = $_SESSION['myid'];
	$friend = $_REQUEST['friend'];
	$which = $_REQUEST['optionsRadios'];
	if ($which=="phone")
	{
		$phone = $_REQUEST['contact'];
		$email = "";	
	}
	else 
	{
		$phone = "";
		$email = $_REQUEST['contact'];		
	}

	$_REQUEST['tells'];


$sql2="INSERT INTO $tbl_tells (fsid, name, which, email, phone, tells) VALUES ('$fsid', '$friend', '$which', '$phone', '$email');";
$result2=mysql_query($sql2);

}

if ($_REQUEST['adddel'] == 'del')
{
	$fsid = $_SESSION['myid'];
	$friend = $_REQUEST['friend'];


	$sql2 = "DELETE FROM $tbl_tells WHERE name='$friend' AND fsid='$fsid';";
	$result2=mysql_query($sql2);
}


header("location:http://fourtell.co/login.php");

?>