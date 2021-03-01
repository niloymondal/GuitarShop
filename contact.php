<!DOCTYPE html>
<html>
<head>
<title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'menu.php'; ?>

<div class="jumbotron">
  <h1>We are Guitar Epicenter.</h1>
  <p>“With you, throughout your musical journey.”</p>
</div>
<section class="my-5"> 
  <div class="py-5">
    <h2 class="text-center"><u>Contact Us</u></h2>
  </div>
  <div class="w-50 m-auto">

  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">

    </div>
    <div class="form-group">
      <label>Email Id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">

    </div>
    <div class="form-group">
      <label>Mobile</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">

    </div>
    <div class="form-group">
      <label>Comments</label>
      <textarea class="form-control"  name="comments"> 

      </textarea>

    </div>
    <button type="submit" class="btn btn-success">Submit</button>

  </form>
  </div>
</section>
<footer>
  <p class="bg-dark text-white text-center">@GuitarEpicenter.com</p>
</footer>
</body>
</html>