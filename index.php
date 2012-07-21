<?php 
include "header.php";
?>

<div class="hero-unit">
  <h1>FourTell</h1>
  <h2>Bringing the check-in party to your luddite friends.</h2>
  <p>Get started now by connecting to your foursquare account</p>
  <p>
    <a class="btn" href="https://foursquare.com/oauth2/authenticate?client_id=J0LRFXR1NYQYYWHGEDJJ0VIMMV101D422Q5ISF5L13RNQFQE&response_type=code&redirect_uri=http://fourtell.co/login.php"><img alt="Foursquare" src="https://playfoursquare.s3.amazonaws.com/press/logo/connect-blue.png"></a>
  </p>
</div>

<?php
include "components/add-tells.php";
include "footer.php";
?>