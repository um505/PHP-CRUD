
<?php 

require_once 'actions/db_connect.php';

if ($_GET['media_id']) {
   $media_id = $_GET['media_id'];

   $sql = "SELECT * FROM media WHERE media_id = {$media_id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>
<!DOCTYPE html>
<html>

<head>
   <title>Update Media</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <style>
    img {
      width: 60%;
    }
    </style>

</head>
<body>
<nav class="navbar navbar-light bg-light mb-5">
  <a class="navbar-brand" href="index.php">Collection of Medias</a>
  
</nav>
<div class='container'>

<div class="row">
<div class="col-6">
<img src="<?php echo $data['image'] ?>" alt="">
<p>Status: <?php echo $data['status'] ?></p>
</div>
<div class="col-6">
<h3><?php echo $data['titel'] ?> (<?php echo $data['publish_date'] ?>)</h3> 
<p class="text-right font-italic">Written by: <?php echo $data['author'] ?></p>
<p>Description: <?php echo $data['short_description'] ?></p>
<p>Type: <?php echo $data['type'] ?></p>
<p>Publisher: <?php echo $data['publisher'] ?> </p>
<p>ISBN: <?php echo $data['ISBN'] ?></p>
</div>
</div>         
  
<a href= "index.php"><button type="submit" class="btn btn-secondary ">Back</button></a>
</form>
</div>
</body>
</html>

<?php
}
?>