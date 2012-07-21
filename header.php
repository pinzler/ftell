<?php
//Header include file
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FourTell: Check In and Tell Your Luddite Friends</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Let's face it – not many of your friends use foursquare and sharing is the whole point! FourTell lets you create groups of friends by interests and notifies them when you use that hashtag in a foursquare check in.">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <style>      
      @media screen and (min-width: 980px) {
	      body {
	      	padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	      	}
	      	
	      }
	  @media screen and (min-width: 460px) {
	      	#hmpg-logo img {height: 60px; width:78px; margin-top: -30px;}
	      }
	      
	      #main-nav-logo img {width:20px; margin-top: -7px; }
	      
	      
	      label.valid {
    width: 24px;
    height: 24px;
    background: url(../assets/img/valid.png) center center no-repeat;
    display: inline-block;
    text-indent: -9999px;
    }
    label.error {
    font-weight: bold;
    color: red;
    padding: 2px 8px;
    margin-top: 2px;
    }
    #twitter-widget p {font-size:14px !important;}
    </style>
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <!--<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>-->
          </a>
          <a id="main-nav-logo" class="brand" href="/">FourTell <img src="../assets/img/bullhorn-gray.png"></a>
          <div class="nav-collapse">
            <ul class="nav">
              <!--<li class="active"><a href="/">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>-->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">