<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Allison|Cute Font" />
  <script src="https://kit.fontawesome.com/e7e64de2ec.js" crossorigin="anonymous" async></script>

  <title>Login - A.D Blogs</title>
  <link rel="icon" href="aakashdhakal.ico" />
</head>

<body>
  <section id="login-popup" role="dialog">
    <div class="max-width">
      <h1>Welcome Back!</h1>
      <h5>Sign in to your account</h5>
      <form action="login-config.php" method="post">
        <div class="input-wrapper">
          <i class="fas fa-user"></i>
          <input type="text" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="input-wrapper">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="input-wrapper">
          <input type="checkbox" name="remember" id="remember">
          <label for="remember">Remember me</label>
        </div>
        <input type="submit" value="Log In" class="btn solid" name="login">
      </form>
      <a href="signup.php">Create account</a>
    </div>
  </section>

  <script src="JS/login.js" defer></script>
  <script src="JS/script.js" defer></script>
</body>

</html>