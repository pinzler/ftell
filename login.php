

<?php
session_start();

include "header.php";

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




if (!isset($_SESSION['myid']))
{
	
	$key = $_REQUEST['code'];

	$uri = file_get_contents("https://foursquare.com/oauth2/access_token?client_id=J0LRFXR1NYQYYWHGEDJJ0VIMMV101D422Q5ISF5L13RNQFQE&client_secret=HTDLG32GFDVDO5UL4KCYTKDXLPQQPC3TM0XAPRHJSCCEKFSO&grant_type=authorization_code&redirect_uri=http://fourtell.com/login.php&code=".$key, 
	    true);

	$obj = json_decode($uri);// Convert JSON

	$usertok = $obj->access_token;

	$uri = file_get_contents("https://api.foursquare.com/v2/users/self?oauth_token=".$obj->access_token,
	  true); 

	$obj = json_decode($uri);// Convert JSON


	$_SESSION['myid'] = $obj->response->user->id;
	$myid = $obj->response->user->id; 

	$sql="SELECT * FROM $tbl_name WHERE id='$myid'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count<>1){
		if(isset($obj->response->user->firstName))	
			$fname = $obj->response->user->firstName;
		else 	
	    	$fname="";

	    if(isset($obj->response->user->lastName))	
			$lname = $obj->response->user->lastName;
		else 	
	    	$lname="";

	    if(isset($obj->response->user->contact->phone))	
			$phone = $obj->response->user->contact->phone;
		else 	
	    	$phone="";

		
	    if(isset($obj->response->user->contact->email))	
			$email = $obj->response->user->contact->email;
		else 	
	    	$email="";

	    $sql="INSERT INTO $tbl_name (id, fname, lname, phone, email) VALUES ('$myid', '$fname', '$lname', '$phone', '$email');";
		$result=mysql_query($sql);
	
		}
}
	
	$myid = $_SESSION['myid'];
	
	echo "Welcome ".$myid."<BR>";

	$query = "select * from $tbl_tells where fsid = '$myid'";
	$resultbig=mysql_query($query);
	while($rowbig = mysql_fetch_array($resultbig, MYSQL_ASSOC)) {
	    $friend = $rowbig['name'];
	    if ($rowbig['which'] == 'phone')
	    	$contact = $rowbig['phone'];
	    else
	    	$contact = $rowbig['email']
		$tells=$rowbig['tells'];
		
		echo $friend." ".$contact." ".$tells."<BR>"

		}

	
	echo "<BR><BR>Display add form<BR><BR>";
	


include "footer.php";

?>



