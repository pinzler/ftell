<?php 
include "header.php";
?>

<div class="hero-unit">
  <h1>FourTell</h1>
  <h2>Bringing the check-in party to your luddite friends.</h2>
  <p>Get started now by connecting to your <i>foursquare<sup>&reg;</sup></i> account</p>
  <p>
    <a class="btn btn-large" href="https://foursquare.com/oauth2/authenticate?client_id=J0LRFXR1NYQYYWHGEDJJ0VIMMV101D422Q5ISF5L13RNQFQE&response_type=code&redirect_uri=http://fourtell.co/login.php"><img alt="Foursquare" src="https://playfoursquare.s3.amazonaws.com/press/logo/connect-blue.png"></a>
  </p>
</div>

<div class="well">
	<h2>What is FourTell?</h2>
	<p>You're one of those digital people who compulsively check in to foursquare everywhere you go. Earning badges is cool, but let's face it – not many of your friends use foursquare and sharing is the whole point! Now you can let your friends know via text message or email when you check into something they'd like. FourTell lets you create groups of friends by interests and notifies them when you use that hashtag in a foursquare check in.</p>
</div>

<?php
include "components/add-tells.php";
include "footer.php";
?>