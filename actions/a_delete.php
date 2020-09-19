<!DOCTYPE html>
<html>

<head>
   <title>Delete Media</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light mb-5">
  <a class="navbar-brand" href="../index.php">Collection of Medias</a>
  
</nav>
<div class="container">
<?php 

require_once 'db_connect.php';

if ($_POST) {
   $media_id = $_POST['media_id'];

   $sql = "DELETE FROM media WHERE media_id = {$media_id}";
    if($connect->query($sql) === TRUE) {
       echo "<h3>Successfully deleted!</h3>" ;
       echo "<a href='../index.php'><button type='button' class='btn btn-secondary'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
</div>
</body>
</html>