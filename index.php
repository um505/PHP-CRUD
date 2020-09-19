<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Library</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <style>
    img {
      width: 5em;
    }
    #description {
      font-size: 0.8em;
    }
    .navbar-brand{
      text-align: center; 
    }
    </style>

</head>
<body>
<nav class="navbar navbar-light bg-light ">
  <a class="navbar-brand" href="index.php">Collection of Medias</a>
  <a href= "create.php"><button class="btn btn-primary float-right mb-2  btn-sm" type="button" >Add Media</button></a>
</nav>
<div class='container'>

    
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titel</th>
      <th scope="col">Cover</th>
      <th scope="col">Author</th>
      <th scope="col">ISBN</th>
      <th scope="col">Description</th>
      <th scope="col">Date of publischment</th>
      <th scope="col">Publisher</th>
      <th scope="col">Type</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
  <img src="" alt="">
    </tr>
    <div class="d-flex"></div>
  </thead>
  <tbody>
            <?php
           $sql = "SELECT * FROM media";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo 
                    "<tr><th>".
                      $row['media_id']."</th><th>".
                      $row['titel']."</th><th><img src=\"".
                      $row['image']."\"></th><th>".
                      $row['author']."</th><th>".
                      $row['ISBN']."</th><th id='description'>".
                      $row['short_description']."</th><th>".
                      $row['publish_date']."</th><th>".
                      $row['publisher']."</th><th>".
                      $row['type']."</th><th>".
                      $row['status']."</th><th>
                      <a href='update.php?media_id=" .$row['media_id']."'><button class='btn btn-warning mb-2  btn-sm' type='button'>Edit</button></a>
                      <a href='delete.php?media_id=" .$row['media_id']."'><button class='btn btn-danger  mb-2 btn-sm' type='button'>Delete</button></>
                      <a href='details.php?media_id=" .$row['media_id']."'><button class='btn btn-info mb-2  btn-sm' type='button'>Show Media</button></a></th></tr>";
                      
                      
               }
           } else  {
               echo  "No Data Avaliable";
           }
            ?>

           
       </tbody>
   </table>
</div>

</body>
</html>

