<!doctype html>
<html lang="pl">

 <head>
   <meta charset="utf-8">
 </head>
 <body>
<form name="Registration" action="registerClass" method="POST">
  <div class="container">
    <h1>Register</h1>
    <input type="text" name="firstname" required> First Name<br>
    <input type="text" name="lastname" required> Last Name<br>
    <input type="e-mail" name="email" required> E-mail<br>
    <input type="password" name="pass1" required> Password<br>
    <input type="password" name="pass2" required> Repeat Password<br>
    <button type="sumbit">Register<br>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="task21_2.php">Sign in</a></p>
  </div>
</form>
 </body>



</html>