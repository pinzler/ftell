

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

	$uri = file_get_contents("https://foursquare.com/oauth2/access_token?client_id=J0LRFXR1NYQYYWHGEDJJ0VIMMV101D422Q5ISF5L13RNQFQE&client_secret=HTDLG32GFDVDO5UL4KCYTKDXLPQQPC3TM0XAPRHJSCCEKFSO&grant_type=authorization_code&redirect_uri=http://fourtell.co/login.php&code=".$key, 
	    true);

	$obj = json_decode($uri);// Convert JSON

	$usertok = $obj->access_token;

	$uri = file_get_contents("https://api.foursquare.com/v2/users/self?oauth_token=".$obj->access_token,
	  true); 

	$obj = json_decode($uri);// Convert JSON


	$_SESSION['myid'] = $obj->response->user->id;
	$myid = $obj->response->user->id; 
	$_SESSION['firstn'] = $obj->response->user->firstName; 
	$firstn = $obj->response->user->firstName;

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
	$firstn = $_SESSION['firstn'];
	echo "<h2 style='padding-bottom: 1em;'>Welcome ".$firstn."</h2>";
	include "components/add-tells.php";
	$query = "select * from $tbl_tells where fsid = '$myid'";
	$resultbig=mysql_query($query);
	$count2=mysql_num_rows($resultbig);
	if ($count2<>0) {
	?>
	<table class="table table-striped table-bordered table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>Friend Name</th>
            <th>Contact Info</th>
            <th>Tells</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>	
<?php
	$friendcount = 1;
	while($rowbig = mysql_fetch_array($resultbig, MYSQL_ASSOC)) {
	    $friend = $rowbig['name'];
	    if ($rowbig['which'] == 'phone')
	    	$contact = $rowbig['phone'];
	    else
	    	$contact = $rowbig['email'];
		$tells=$rowbig['tells'];

		echo "<tr><td>".$friendcount."</td><td>".$friend."</td><td>".$contact."</td><td>".$tells."</td><td><a href='/components/updateTable.php?adddel=del&friend=".$friend."'>Remove</a></td></tr>" ;
		$friendcount++;
		}
	
?>
          </tbody>
      </table>
      
<?php
}
include "components/instructions.php";
include "footer.php";

?>



