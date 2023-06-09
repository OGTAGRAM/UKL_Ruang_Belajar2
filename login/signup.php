<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignUp</title>
  <!-- Font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="login.css" />
</head>

<body>
  <div class="wrapper">
    <form action="proccesregis.php" method="post">
      <h1>Sign Up</h1>
      <input type="text" placeholder="username" class="txt" name="username" />
      <input type="password" placeholder="password" class="txt" name="Password" />
      <input type="submit" value="create account" class="btn" name="btn-save" />
    </form>

    <div class="member">
      sudah punya akun ?<a href="login.php">Login</a>
    </div>
  </div>
</body>

</html>