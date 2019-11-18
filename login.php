<div class="hidden">
  <?php
  session_start();
  ?>
</div>

<?php


require_once("./lib/connection.php");
if (isset($_POST["btn_submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $username = strip_tags($username);
  $username = addslashes($username);
  $password = strip_tags($password);
  $password = addslashes($password);

  if ($username == "" || $password == "") {
    echo "Username or password must not be empty";
  } else {
    $sql = "select * from users where username = '$username' and password = '$password'";
    $querry = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($querry);


    if ($num_rows == 0) {
      echo "Username of password not match !";
    } else {
      $row = $querry->fetch_assoc();
      $_SESSION['username'] = $username;
      $_SESSION['fullname'] = $row["fullname"];
      setcookie("SESSION_ID", session_id(), time() + 15 * 60, "/");
      header('Location: index.php');
    }
  }
}

?>




<div class="container small-container">
  <h3>Sign in</h3>

  <form method="POST" action="login.php">
    <div class="form-group pt-4 text-left ">
      <label class="pl-3" for="username">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Enter your username" />
    </div>
    <div class="form-group text-left">
      <label class="pl-3" for="password">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter your password" />
    </div>

    <button class="btn btn-primary pl-4 pr-4" name="btn_submit">
      Login
    </button>
  </form>
</div>