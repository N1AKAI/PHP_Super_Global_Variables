<?php
/* User's Data */
$email_db = "saad.aboulhoda@gmail.com";
$pass_db  = "1234";
/* Error's Array */
$formErrors = [];
/* Start Session */
session_start();
/*
Check If there's Cookies in The Browser
Then, Put Them in Session Variable
*/
if (isset($_COOKIE["email"]) && isset($_COOKIE["pass"])) {
  $email = $_COOKIE["email"];
  $pass = $_COOKIE["pass"];
  if ($email === $email_db && $pass === $pass_db) {
    $_SESSION["email"] = $email;
    header("Location: welcome.php");
    exit();
  }
}
/* Put User Email in Session Variable */
if (isset($_SESSION["email"])) {
  header("Location: welcome.php");
  exit();
}
/*
Check If There's Htpp Request
If There's, Make a Variable Session
*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  $pass = $_POST["password"];
  if ($email === $email_db && $pass === $pass_db) {
    if ($_POST["remember"]) {
      setcookie("email", $email, time() + 60 * 60 * 24 * 7); // 7 Days
      setcookie("pass", $pass, time() + 60 * 60 * 24 * 7); // 7 Days
    }
    $_SESSION["email"] = $email;
    header("location: welcome.php");
    exit();
  } else {
    $formErrors[] = "Email or Password is wrong";
  }
}
foreach ($formErrors as $error) {
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
      </svg>';
  echo '<div class="alert my-alert mx-auto alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>'
    . $error .
    '</div>
      </div>';
}
?>

<h3 class="text-center">Login Form</h3>
<div class="login-form m-auto bg-white shadow-sm rounded p-4 mt-3">
  <form class="mt-5" action="./index.php?page=login" method="POST">
    <div class="mb-3">
      <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail2" name="email" placeholder="email@example.com" required>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword2" name="password" placeholder="Password" required>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" name="remember" id="dropdownCheck2">
        <label class="form-check-label" for="dropdownCheck2">
          Remember me
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>

<h3 class="text-center mt-5">PHP Code</h3>
<div class="mt-3 login-code mx-auto">
  <pre><code class="language-php">&lt;?php
/* User's Data */
$email_db = "saad.aboulhoda@gmail.com";
$pass_db  = "1234";
/* Error's Array */
$formErrors = [];
/* Start Session */
session_start();
/*
Check If there's Cookies in The Browser
Then, Put Them in Session Variable
*/
if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])) {
  $email = $_COOKIE["email"];
  $pass = $_COOKIE["password"];
  if ($email === $email_db && $pass === $pass_db) {
    $_SESSION["email"] = $email;
    header("Location: welcome.php");
    exit();
  }
}
/* Put User Email in Session Variable */
if (isset($_SESSION["email"])) {
  header("Location: welcome.php");
  exit();
}
/*
Check If There's Htpp Request
If There's, Make a Variable Session
*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  $pass = $_POST["password"];
  if ($email === $email_db && $pass === $pass_db) {
    if ($_POST["remember"]) {
      setcookie("email", $email, time() + 60 * 60 * 24 * 7); // 7 Days
      setcookie("pass", $pass, time() + 60 * 60 * 24 * 7); // 7 Days
    }
    $_SESSION["email"] = $email;
    header("location: welcome.php");
    exit();
  } else {
    $formErrors[] = "Email or Password is wrong";
  }
}
?&gt;</code></pre>
</div>