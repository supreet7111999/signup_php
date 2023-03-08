<?php
  error_reporting(0);
  session_start();
  $nam=$_SESSION['naam'];
  if($nam=="")
  {
    header("Location:index.php");
  }
  if(isset($_POST['finish']))
  {
    header("Location:final.php");
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
    <label for="loc" class="form-label">Location<span>*<span></label>
    <input type="text" class="form-control" id="loc" name="loc"aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age<span>*<span></label>
    <input type="number" class="form-control" id="age" name="age" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3">
    <label for="uni" class="form-label">University</label>
    <input type="text" class="form-control" id="uni" name="uni" required>
  </div>
  <button type="submit" name="finish"class="btn btn-primary">Submit</button>
</form>
 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>