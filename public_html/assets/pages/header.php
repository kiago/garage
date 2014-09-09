<?php
include '../db/library.php';
if(!isset($_SESSION['userid']) || $_SESSION['userid'] == ''){
	echo '<script type="text/javascript">window.location = "s-identifier"; </script>';
}
$actual_link = "http://$_SERVER[HTTP_HOST]";

?>
<!DOCTYPE HTML>
<!--
	Minimaxing 3.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title><?php echo $titre; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css"> -->
<link rel="stylesheet" href="assets/css/pure-min.css">

<!-- Load jQuery library  PROBLEME-->
<script  src="assets/js/jquery2.min.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/config.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/skel-panels.min.js"></script>

<script src="assets/js/jquery.maskedinput.min.js"></script>

<script src="assets/js/jquery.jeditable.js" type="text/javascript"></script>

<script src="assets/js/jquery.jeditable.autogrow.js" type="text/javascript" ></script>



<noscript>
<link rel="stylesheet" href="assets/css/skel-noscript.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/style-desktop.css" />
</noscript>
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->

<!-- Load  search -->
<?php if ($titre=='Recherche de plaque'){ ?>
<!-- Load CSS -->
<link href="assets/css/style_search.css" rel="stylesheet" type="text/css" />
<!-- Load Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold" type="text/css" />

<!-- Load custom js -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- make DELETABLE input js -->

<script>
            $(document).ready(function() {
                $('input.deletable').wrap('<span class="deleteicon" />').after($('<span/>').click(function() {
                    $(this).prev('input').val('').focus();
                }));
            });
        </script>
<style>
span.deleteicon {
	position: relative;
}
span.deleteicon span {
	position: absolute;
	display: block;
	top: 5px;
	right: 0px;
	width: 25px;
	height: 25px;
	background: url('http://cdn.sstatic.net/stackoverflow/img/sprites.png?v=4') 0 -690px;
	cursor: pointer;
}
span.deleteicon input {
	padding-right: 16px;
}
</style>

<!-- END make DELETABLE input js -->

<!-- ENDLoad  search -->
<?php 


	} ?>
</head><body>
<!-- ********************************************************* --><!-- ********************************************************* -->
<div id="header-wrapper">
  <div class="container">
    <div class="row">
      <div class="12u">
        <header id="header">
          <h1><a href="#" id="logo">Garage</a></h1>
          <nav id="nav"> <a href="recherche-plaque">Recherche</a>
            <?php 
							

							if($_SESSION['userid'] == '1'){


								?>
            <a href="ajout-nouvelle-plaque">Nouvelle entrée</a>
            <?php 
							}
							?>
            <a href="au-revoir">Deconnexion</a> </nav>
        </header>
      </div>
    </div>
  </div>
</div>
