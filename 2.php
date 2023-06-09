<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        padding-left: 42%;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"],
      input[type="password"] {
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h1>Login Page</h1>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];
      if ($valid_credentials) {
          header('Location: /dashboard');
          exit();
      } else {
          $error_message = 'Invalid username or password';
      }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <?php if (isset($error_message)): ?>
      <p><?php echo $error_message; ?></p> 
    <?php endif; ?>
  </body> 
</html>
<?php
session_start(); 
$attempt = 0; 
if (isset($_SESSION['attempt'])) {
  $attempt = $_SESSION['attempt'];
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username === 'username' && $password === 'password') {
    header('Location: halaman_selanjutnya.php');
    exit;
  } else {
    $attempt++;
    $_SESSION['attempt'] = $attempt;
  }
}
if ($attempt >= 3) {
  echo "Anda telah mencoba login sebanyak 3 kali. Silakan coba lagi dalam 10 detik.";
  session_unset(); 
  session_destroy();
  header('Refresh: 10');
  exit;
}