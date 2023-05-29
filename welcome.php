<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("location: index.php?page=login");
  exit();
}
?>
<!-- Header Section -->
<?php
require_once "includes/layout/header.php";
?>
<!-- Navbar -->
<?php
require_once "includes/layout/navbar.php";
?>

<div class="pt-5 pb-5 text-center">
  <div class="container">
    <h3>Welcome Dear User</h3>
    <p>Your email adresse is: <span class="fw-bold"><?php echo $_SESSION["email"] ?></span></p>
    <a class="d-block btn danger-btn mx-auto" href="./logout.php">Logout</a>
  </div>
</div>

<h3 class="text-center mt-5">PHP Code</h3>
<div class="mt-3 login-code mx-auto">
  <pre><code class="language-php">&lt;?php
session_start();
if (!isset($_SESSION["email"])) {
  header("location: index.php?page=login");
  exit();
}
echo '&lt;div class="pt-5 pb-5 text-center"&gt;';
echo   '&lt;div class="container"&gt;';
echo     '&lt;h3&gt;Welcome Dear User&lt;/h3&gt;';
echo     '&lt;p&gt;Your email adresse is: &lt;span class="fw-bold"&gt;' . $_SESSION["email"] . '&lt;/span&gt;&lt;/p&gt;';
echo     '&lt;a class="d-block btn danger-btn mx-auto" href="./logout.php"&gt;Logout&lt;/a&gt;';
echo  '&lt;/div&gt;';
echo '&lt;/div&gt;';
?&gt;</code></pre>
</div>

<!-- Footer Section -->
<?php
require_once "includes/layout/footer.php";
?>