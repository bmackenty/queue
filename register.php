<!doctype html>
<html lang="en">
    <!-- Documentation: http://getbootstrap.com/docs/4.1/getting-started/introduction/ -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <!-- keep your content within body opening and closing tags -->
  <body>
      
<?php 
include('header.php'); 
?>

<div class="container my-3"> <!-- open container -->

<div class="alert alert-info" role="alert">
  <p> <strong>Thank you</strong> for registering for our site.</p>
  <p>New regsitrations need to approved by a moderator, so please be patient after you register.</p>
</div>

<form action="register_process.php" method="post">



  <div class="form-group">
    <label for="InputEmail">Email address</label>
    <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Please enter your email address" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Please enter a password" required>
    <small id="passwordHelp" class="form-text text-muted">Please choose a strong, unique password</small>

  </div>

  <div class="form-group">
    <label for="selectClass">Select your class</label>
    <select name="course" class="form-control" id="selectClass" required>
      <option value="IB Computer Science Year 1 (block 2)">IB Computer Science Year 1 (block 2)</option>
      <option value="IB Computer Science Year 2 (block 4)">IB Computer Science Year 2 (block 4)</option>
      <option value="Advanced Programing (block 3)">Advanced Programing (block 3)</option>
      <option value="Designing Solutions Through Programming (block 6)">Designing Solutions Through Programming (block 6)</option>
      <option value="Designing Solutions Through Programming (block 8)">Designing Solutions Through Programming (block 8)</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Click here to register</button>
</form>


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
