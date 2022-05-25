<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/Llogin.css">
  <script src="JS/CUMBACK.js"></script>
</head>

<body>

  <form action="PHP/register.php" method="post" id="regFrm">
    <div class="container">
      <h1>Register</h1>
      <p>Completati tate spatiile.</p>

      <p style="color:red" id="errP">     
      <?php
        session_start();
        if($_SESSION['errors'] == true && $_SESSION['errorMessage'] != ''){
          echo $_SESSION['errorMessage'];
        }
      ?>
      </p>

      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
      <hr>

      <button type="submit" class="registerbtn">Register</button>
      <button onclick="cumback()" class="registerbtn1">HOMEPAGE</button>
    </div>

    <div class="container signin">
      <p>Deja aveti acaunt? <a href="LOGIN.php">Sign in</a>.</p>
    </div>
  </form>

  <script src="JS/validare.js"></script>
</body>

</html>