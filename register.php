<?php
require_once("./lib/connection.php");
if (isset($_POST["btn_submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $fullname = $_POST["fullname"];
  if ($username == "" || $password == "" || $fullname == "") {
    echo "Please input all fields";
  } else {
    //thực hiện việc lưu trữ dữ liệu vào db
    $sql = "INSERT INTO users(username,password,fullname) VALUES ('$username','$password','$fullname')";
    mysqli_query($conn, $sql);
    // echo "Sign up successfully";
    header("Location: index.php");
  }
}
?>

<div class="container small-container">
  <h3>Sign up</h3>

  <form method="POST" action="register.php">
    <div class="form-group pt-4 text-left ">
      <label class="pl-3" for="username">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Enter your username" />
    </div>
    <div class="form-group text-left">
      <label class="pl-3" for="password">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter your password" />
    </div>
    <div class="form-group text-left">
      <label class="pl-3" for="password">Full name</label>
      <input type="text" name="fullname" class="form-control" placeholder="Enter your full name" />
    </div>

    <button class="btn btn-primary pl-4 pr-4" name="btn_submit">
      Sign up
    </button>
  </form>
</div>