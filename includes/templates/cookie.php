<?php
$exs = array(
  array(
    "number" => 1,
    "desciption" => "Single Cookie",
    "code" => '&lt;?php
setcookie("CookieName", "CookieValue");
?&gt;'
  ),
  array(
    "number" => 2,
    "desciption" => "Single Cookie with Time",
    "code" => '&lt;?php
setcookie("CookieName", "CookieValue", time() + 60 * 60);
?&gt;'
  ),
  array(
    "number" => 3,
    "desciption" => "Multi Cookies",
    "code" => '&lt;?php
    setcookie("CookieName1", "CookieValue", time() + 60 * 60 * 24); // 1 Day
    setcookie("CookieName2", "CookieValue", time() + 60 * 60 * 24 * 7); // 7 Days
}
?&gt;'
  ),
  array(
    "number" => 4,
    "desciption" => "Delete Cookie",
    "code" => '&lt;?php
setcookie("CookieName", "CookieValue", time() - 1);
echo "Cookie CookieName is deleted.";
?&gt;'
  ),
  array(
    "number" => 5,
    "desciption" => "Echo Cookie",
    "code" => '&lt;?php
echo $_COOKIE["CookieName"];
?&gt;'
  ),
);

?>

<div class="row align-items-center">
  <?php
  foreach ($exs as $ex) {
    $number = $ex["number"];
    $desciption = $ex["desciption"];
    $code = $ex["code"];
  ?>
    <div class="col-lg-6" id="<?php echo $number ?>">
      <h4 class="mb-3">Example <?php echo "$number : $desciption" ?></h4>
      <pre>
<code class="language-php"><?php echo $code ?></code>
</pre>
      <div class="d-flex justify-content-end mt-3">
        <a class="btn main-btn" href="./index.php?page=cookie&ex=<?php echo $number . '#' . $number ?>">Test</a>
      </div>
    </div>
    <div class="col-lg-6 border pt-3 pb-3 output" style="white-space: pre-wrap;">
      <?php
      if (isset($_GET["ex"]) && $_GET["ex"] == $number) {
        include "cookie/$number.php";
      }
      ?>
    </div>
  <?php
  }
  ?>
</div>