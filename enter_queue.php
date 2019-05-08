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
session_start();
include('header.php');
include('access_control.php'); 
include('database_inc.php');
$course = $access_control['course'];
$date = date("Y-m-d");
$human_friendly_date = date("l d F Y");
$time = date("G:i:s");
?>

<div class="container my-3"> <!-- open container -->

<?php 

if ($access_control['logged_in'] == "no") {
    // if someone isn't logged in we don't want them to visit. 
    header('location:index.php');
} else { 
?>
<main role="main">

<form action="process_entry.php" method="POST">

<div class="card">
  <div class="card-header">
  Enter the help queue for <?php echo $course; ?>
  </div>
  <div class="card-body"> 

  <ul class="list-group my-3">
  <li class="list-group-item"><strong>Date:</strong> <?php echo $human_friendly_date; ?></li>
  <li class="list-group-item"><strong>Time:</strong> <?php echo $time; ?></li>
  </ul>

  <div class="form-group">
    <label for="describeIssue">Describe your issue:</label>
    <textarea name="description" class="form-control" id="describeIssue" rows="3"></textarea>
  </div>

    <button type="submit" class="btn btn-primary">Click to enter the help queue</button>
  </div>
</div>




</form>


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
