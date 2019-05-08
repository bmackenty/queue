<!doctype html>
<html lang="en">
    <!-- Documentation: http://getbootstrap.com/docs/4.1/getting-started/introduction/ -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Queue Manager</title> 
  </head>
 
  <!-- keep your content within body opening and closing tags -->
  <body>
      
<?php 
include('header.php');
include('access_control.php');
?>

<div class="container my-3"> <!-- open container -->

<?php 
session_start();

if($_SESSION['registered_success']) {
  ?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Your account has been registered</strong>
  <p>You may not <a href="login.php">login</a> until your account is approved.
  You will be notified via the email address you provdided. </p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
unset($_SESSION['registered_success']);
}
if ($access_control['logged_in'] == "no") {
?>

 <main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Mr. MacKenty's Queue Manager</h1>
    <p>Please use this site to schedule an in-class (or out of class) meeting
    with your computer science teacher</p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-12">
      <h2>You are currently logged out</h2>
      <p>There will eventually be a helpful list here. You will need to <a href="register.php">sign in</a> if you want to enter our help queue.</p>
    </div>

  </div>

  <hr>

</div> <!-- /container -->

</main>


<?php
} else { 
?>
<main role="main">

<a class="btn btn-primary" href="enter_queue.php" role="button">Click to add yourself to the queue</a>


</main>

<?php
}
?>

</div>  <!-- close container -->

    <!-- Please don't touch anything below this line -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

<?php
include('footer.php');
?>

</html>
