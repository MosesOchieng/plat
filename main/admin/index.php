<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Userlogs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html>

<body>

  <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">Don't have an account?</p>
          <p>Sign up to get connected.</p>
          <button id="switch1">Sign Up</button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Have an account?</p>
          <p>Log in to find your next Matatu for your route..</p>
          <button id="switch2">LOG IN</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <form action="login_handler.php" method="POST">
        <h2>LOG IN</h2>
        <div class="inputbox">
          <input type="text" name="user" placeholder="  Username" required>
          <input type="password" name="pass" placeholder="  Password" required>
        </div>
        <p>Forgot Password?</p>
        <input type="submit" name="submit" value="Login">
      </div>
</form>

      <div class="signup hide">
        <h2>SIGN UP</h2>
        <form action="register_handler.php" method="POST">
        <div class="inputbox">
          <input type="text" name="username" placeholder="  Username" required>
          <input type="text" name="email" placeholder="  Email">
          <input type="password" name="password" placeholder="  Password" required>
        </div>
        <input type="submit" name="signup" value="Sign Up">
        </form>
      </div>

    </div>
    <!-- frontbox -->
  </div>
</body>

</html>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
