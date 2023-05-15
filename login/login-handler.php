<link rel="stylesheet" href="signinstyle.css?v=<?php echo time(); ?>">

<script>
function popup(message) {
  alert(message);
}
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_db";
session_start();
$_SESSION['username'] = $username;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if (password_verify($password, $row['password'])) {
    $_SESSION['username'] = $row['username'];

    header("Location: /yoursubs/yoursubs.php");
    exit();
  } else {
     echo "<script>popup('Wrong username or password!')</script>";
  }
} else {
  echo "<script>popup('Wrong username or password!')</script>";
}

$conn->close();
?>


<link rel="stylesheet" href="signinstyle.css?v=<?php echo time(); ?>">

<form action="login-handler.php" method="post">

<div class="container">
  <input type="text" class="username" name="username" placeholder="Enter your username..."><br>
  <input type="password" class="password" name="password" placeholder="Enter your password..."><br>
  </div>
<h1 class="signIn">Sign In</h1>

  <input type="submit" value="Login" class="submit">
</form>





