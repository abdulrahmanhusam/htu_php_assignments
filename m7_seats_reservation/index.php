<?php
require 'header.php';
include 'functions.php';

?>

<h1 class="text-center my-3">Register Page</h1>
<form class="my-5 w-50 m-auto" method="POST" action="./auth/create_user.php">
<div class="mb-3">
    <label for="display_name" class="form-label">Display Name:</label>
    <input type="text" class="form-control" id="display_name" name="display_name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>


<?php require 'footer.php';?>