<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/Llogin.css">
  <script src="JS/CUMBACK.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

  <form action="JS/validare.j" method="POST" id="logFrm">
    <div class="container">
      <h1>Login</h1>
      <p>Completati tate spatiile.</p>
      <p style="color:red" id="errP"></p>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="eml" id="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

      <hr>

      <button type="submit" class="registerbtn">Log in</button>
      <button onclick="cumback()" class="registerbtn1">HOMEPAGE</button>
    </div>
    <div class="container signin">
      <p>Inca nu vati inregistrat? <a href="REGOSTER.php">Register</a>.</p>
    </div>

  </form>

  <script src="JS/validare.js"></script>
</body>

</html>