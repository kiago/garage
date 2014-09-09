<?php
/*
Simple ajax live login script by asif18.com
*/
include '../db/library.php';
if(isset($_SESSION['userid']) && $_SESSION['userid'] != ''){ // Redirect to secured user page if user logged in
  echo '<script type="text/javascript">window.location = "recherche-plaque"; </script>';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page d'indentification</title>
<script type="text/javascript" src="assets/js/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#username').focus(); // Focus to the username field on body loads
  $('#login').click(function(){ // Create `click` event function for login
    var username = $('#username'); // Get the username field
    var password = $('#password'); // Get the password field
    var login_result = $('.login_result'); // Get the login result div
    login_result.html('loading..'); // Set the pre-loader can be an animation
    if(username.val() == ''){ // Check the username values is empty or not
      username.focus(); // focus to the filed
      login_result.html('<span class="error">Enter the username</span>');
      return false;
    }
    if(password.val() == ''){ // Check the password values is empty or not
      password.focus();
      login_result.html('<span class="error">Enter the password</span>');
      return false;
    }
    if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request
      var UrlToPass = 'action=login&username='+username.val()+'&password='+password.val();
      $.ajax({ // Send the credential values to another checker.php using Ajax in POST menthod
      type : 'POST',
      data : UrlToPass,
      url  : 'assets/db/checker.php',
      success: function(responseText){ // Get the result and asign to each cases
        if(responseText == 0){
          login_result.html('<span class="error">Username or Password Incorrect!</span>');
        }
        else if(responseText == 1){
          window.location = 'recherche-plaque';
        }
        else if(responseText == 2){
          alert('problem pdo');
        }
        else{
          alert('Problem with sql query');
        }
      }
      });
    }
    return false;
  });
});
</script>
<link rel='stylesheet' href='assets/css/jquery-ui.css'>
<link rel="stylesheet" href="assets/css/style_login.css" media="screen" type="text/css" />

<!-- DEBUT RESPONSIVE LOGIN with simple GRID-->

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

<!--[if lt IE 9 ]><link rel="stylesheet" href="./css/720_grid.css" type="text/css"><![endif]-->
<link rel="stylesheet" href="assets/css/720_grid.css" type="text/css" media="screen and (min-width: 720px)">
<link rel="stylesheet" href="assets/css/986_grid.css" type="text/css" media="screen and (min-width: 986px)">
<link rel="stylesheet" href="assets/css/1236_grid.css" media="screen and (min-width: 1236px)" >
<script type="text/javascript" src="http://use.typekit.com/fti4bos.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- FIn RESPONSIVE LOGIN with simple GRID-->

</head>

<body>
<div class="banner-wrap">
  <div class="banner">
    <div class="login-card">
      <h1>Identification</h1>
      <br>
      <tr>
        <td colspan="2"><div class="login_result" id="login_result"></div></td>
      </tr>
      <form>
        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur">
        <input type="password" name="password" id="password" placeholder="Mot de passe">
        <input type="submit" name="login" class="login login-submit" id="login" value="S'identifier">
      </form>
    </div>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> --> 

<!-- <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script> --> 
<script src='assets/js/jquery_and_jqueryui.js'></script>
</body>
</html>