<?php 
include "header.php";
?>
<div class="row">
  <div class="span12">
  <div class="hero-unit">
	<div id="twitter-widget" class="hidden-phone" style="float:right">
		<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 2,
  interval: 30000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#f7f2f7',
      color: '#0d010d'
    },
    tweets: {
      background: '#000000',
      color: '#cae6db',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('FourTell').start();
</script>
	</div>
  <h1 id="hmpg-logo">FourTell <img src="../assets/img/bullhorn.png"></h1>
  <h2>Bringing the check-in party to your luddite friends.</h2>
  <p>Get started now by connecting to your <i>foursquare<sup>&reg;</sup></i> account</p>
  <p>
    <a class="btn btn-large" href="https://foursquare.com/oauth2/authenticate?client_id=J0LRFXR1NYQYYWHGEDJJ0VIMMV101D422Q5ISF5L13RNQFQE&response_type=code&redirect_uri=http://fourtell.co/login.php"><img alt="Foursquare" src="https://playfoursquare.s3.amazonaws.com/press/logo/connect-blue.png"></a>
  </p>
  <p style="clear:both; line-height:1px; padding:0; margin:0;"></p>
</div>
  </div></div>

<div class="well">
	<h2>What is FourTell?</h2>
	<p>You're one of those digital people who compulsively check in to foursquare everywhere you go. Earning badges is cool, but let's face it – not many of your friends use foursquare and sharing is the whole point! Now you can let your friends know via text message or email when you check into something they'd like. FourTell lets you create groups of friends by interests and notifies them when you use that hashtag in a foursquare check in.</p>
</div>

<?php
include "components/instructions.php";
include "footer.php";
?>