<?php

$obj = json_decode($_REQUEST['checkin']);
  
include 'EpiCurl.php';
include 'EpiOAuth.php';
include 'EpiTwitter.php';


$consumer_key = 'saquuGqXC4Sjvs9eCQ2lQQ';
$consumer_secret = 'CCUIYH5n2Wm5WxYl450utOBs0VSmTn3anEEjeSW6EzM';
$ot = "708193608-OlGtuidrK66LTimf9cuzxf1FHgbrclEka7ZQahuM";
$ots = "ItZnpArm2Zp03lu5cvxLYic6BSELHpDCp5F7mxGRHHI";

$twitterObj = new EpiTwitter($consumer_key, $consumer_secret);

require "Twilio.php";

$number = '4158308875';

$smsmsg = "#lampsquare";

// Set our AccountSid and AuthToken from twilio.com/user/account
$AccountSid = "AC73fd0f9909eb9aabc41af3c279c99a4e";
$AuthToken = "3991617f97278e11876af817f21f0a33";

// Instantiate a new Twilio Rest Client
$client = new Services_Twilio($AccountSid, $AuthToken);

/* Your Twilio Number or Outgoing Caller ID */
$from = '2165038355';

$shout = "";
 
$name = $obj->user->firstName;

$msg = $name . " lamped-in";

$venue = $obj->venue->id;

echo "Test:".$venue; 

if($venue == '4fe904e510817ff1bb7d461a')

{ 

if (isset($obj->shout))
	 $shout = ' and said "'.$obj->shout.'"';

$msg = $msg.$shout;
$to      = 'pinzler@pinzler.com';
$subject = 'LampSquare: '.$name;
$message = $shout;
$headers = 'From: lampsquare@pinzler.com' . "\r\n" .
    'Reply-To: pinzler@pinzler.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

$client->account->sms_messages->create($from, $number, $smsmsg);

$twitterObj->setToken($ot, $ots);
$update_status = $twitterObj->post_statusesUpdate(array('status' => $msg));
$temp = $update_status->response;

}


?>


?>