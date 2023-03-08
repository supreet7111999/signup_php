<?php
  error_reporting(0);
  session_start();
  $_SESSION['naam']="";
  if(isset($_POST[next]))
  {
    $nam=$_POST['naam'];
    $_SESSION['naam']=$nam;
    header("Location:second.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <?php echo $nam ?>
 <form action="" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name <span>*<span></label>
    <input type="text" class="form-control" id="name" name="naam"aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email address <span>*<span></label>
    <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="phone" class="form-control" id="phone" name="phone" required>
  </div>
  <button type="submit" class="btn btn-primary" name="next">Next</button>
</form>
 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>