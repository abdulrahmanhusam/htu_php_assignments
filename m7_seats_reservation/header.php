
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticketing System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!--<link rel="stylesheet" href="">-->
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ticketing System</a>
   
    <div class="float-end me-3" id="navbarSupportedContent">
        <?php if (strpos($_SERVER['REQUEST_URI'],'index.php') ) : ?>
          
         <a class="btn btn-success" aria-current="page" href="login.php">Login</a>
        
          
<?php elseif (strpos($_SERVER['REQUEST_URI'],'login.php') ): ?>
  
         <a class="btn btn-primary" aria-current="page" href="index.php">Sign up</a>
         
         <?php else: ?>
          <a class="btn btn-danger" aria-current="page" href="./auth/logout.php">logout</a>
          
      <?php endif; ?>
    </div>
  </div>
</nav>
 <div class="container">
 