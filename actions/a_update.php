<!DOCTYPE html>
<html>

<head>
   <title>Update Media</title>
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
        $titel = $_POST['titel'];
        $image = $_POST['image'];
        $author = $_POST['author'];
        $ISBN = $_POST['ISBN'];
        $short_description = $_POST['short_description'];
        $publish_date = $_POST['publish_date'];
        $publisher = $_POST['publisher'];
        $type = $_POST['type'];
        $available = $_POST['status'];

   $media_id = $_POST['media_id'];

    $sql = " UPDATE media SET titel='$titel',`image`='$image',author='$author',ISBN='$ISBN',short_description='$short_description',publish_date='$publish_date',publisher='$publisher',`type`='$type',`status`='$available' WHERE media_id = '$media_id' " ; 



   if($connect->query($sql) === TRUE) {
       echo "<h2 class=\"text-center pt-2\">Record Successfully Updated</h2>" ;
       echo "<div class=\" d-flex justify-content-center mt-5\">";
       echo "<a href= '../index.php'><button type=\"submit\" class=\"btn btn-info\">Home</button></a>";
       echo "<a href='../update.php'><button type=\"submit\" class=\"btn btn-secondary ml-1\">Back</button></a>";
       echo "</div>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
</div>
</body>
</html>