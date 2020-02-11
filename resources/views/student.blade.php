<!DOCTYPE html>
<html>
<head>
<title>name</title>
<head>
  <title>Emon Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <border>

<center>
<div class="container">
  <div style="width: 350px;">
  <form method="post" action="">
  <div class="form-group">
     <h2 class="text-center">Student form</h2>
    <div class="form-group">

      <label>Name</label>
      <input type="name" class="form-control"  name="name">
    </div>
  </div>
    <div class="form-group">
      <label for="roll">Roll</label>
      <input type="number" class="form-control" name="roll">
    </div>
    <div class="form-group">
      <label>Father name</label>
      <input type="text" class="form-control" name="father_name">
    </div>
    <div class="form-group">
      <label>Mother name</label>
      <input type="text" class="form-control"  name="mother_name">
    </div>

          <div class="form-group ">
          <label >Institute</label>
          <select class="form-control" name="institute">  
          <option>Fci</option>
          <option >Fpi</option>
          <option >Icst</option>
          </select>
          </div>
      </div>
</div>

</center>
</border>

       <div class="text-center">
    <button type="submit" name="submit" class="btn btn-info">Submit</button>
  </form>