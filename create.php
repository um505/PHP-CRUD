<!DOCTYPE html>
<html>

<head>
   <title>Add Media</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light mb-5">
  <a class="navbar-brand" href="index.php">Collection of Medias</a>
  
</nav>
<div class='container'>
               
    <form action="actions/a_create.php" method= "post">
   <div class="form-row">
  <div class="form-group col-6">
    <label>Titel of media</label>
    <input type="text" class="form-control" name="titel" placeholder="Titel of media">
  </div>
  <div class="form-group col-6">
    <label>Author</label>
    <input type="text" name="author" class="form-control" placeholder="Author">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Publisher</label>
      <input type="text" name="publisher" class="form-control" placeholder="Publisher">
    </div>
    <div class="form-group col-md-4">
      <label>Type</label>
      <select name="type" class="form-control">
        <option value="book">Book</option>
        <option value="CD">CD</option>
        <option value="DVD">DVD</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Status</label>
      <select name="status" class="form-control">
        <option value="available">Available</option>
        <option value="reserved">Reserved</option>
      </select>
    </div>
    </div>
    <div class="form-row">
  <div class="form-group col-md-4">
      <label>ISBN</label>
      <input type="text" name="ISBN" class="form-control" placeholder="ISBN">
    </div>
    <div class="form-group col-md-4">
      <label>Image</label>
      <input type="text" name="image" class="form-control" placeholder="Image">
    </div>
  <div class="form-group col-md-4">
    <label >Publish date</label>
    <input type="date" name="publish_date" class="form-control" >
  </div>
  
    <div class="form-group col-12">
      <label>Short description</label>
      <textarea name="short_description" placeholder="Short description" class="form-control" rows="3"></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Insert Media</button>
  <a href= "index.php"><button type="submit" class="btn btn-secondary">Back</button></a>
</form>
</div>
</body>
</html>



