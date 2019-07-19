
<!doctype html>
<!--form
!--input (text,password,radio-opcja do wyklikania-,checkbox,reset,submit,button,file)
!--button
!--<input type="date" name="bdate">
E-mail
<inpute tupe="e-mail" name="e-mail">
-->
<html lang="pl">

 <head>
   <meta charset="utf-8">
 </head>
 <body>
<form name="formRegistration" action="task21_1.php" method="POST">
  <div class="container">
    <h1>Register</h1>
    <input type="text" name="name" required> Imię<br>
    <input type="text" name="lastname" required> Nazwisko<br>
    <input type="e-mail" name="email" required> Podaj e-mail<br>
    <input type="password" name="pass1" required> Hasło<br>
    <input type="password" name="pass2" required> Powtórz hasło<br>
    <button type="sumbit">Register<br>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="task21_2.php">Sign in</a></p>
  </div>
</form>
 </body>



</html>