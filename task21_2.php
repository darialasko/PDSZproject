<?php

session_start();
if ( isset($_SESSION["is_auth"]) && $_SESSION["is_auth"] == 1){
  echo "JESTEŚ już zalogowany!";
  header("Location: dashboard.php");
}
?>
<!doctype html>
<html lang="pl">

 <head>
   <meta charset="utf-8">
 </head>
 <body>

<form action="task21_3.php" method="POST">
      <input type="e-mail" name="email" placeholder="Enter Email">
      <br>
      <input type="password" name="pass1" placeholder="Enter Password">
      <br>
      <input type="submit" name="submit">Sign in<br>
  </form>

 </body>
</html>