<?php
$exs = array(
  array(
    "number" => 1,
    "code" => '&lt;?php
$a = 10;
function test()
{
  echo $a;
}
test();
?&gt;'
  ),
  array(
    "number" => 2,
    "code" => '&lt;?php
$a = 10;
function test()
{
  echo $GLOBALS["a"];
}
test();
?&gt;'
  ),
  array(
    "number" => 3,
    "code" => '&lt;?php
function test() {
  $foo = "local variable";

  echo "$foo in global scope: " . $GLOBALS["foo"] . "\n";
  echo "$foo in current scope: " . $foo . "\n";
}

$foo = "Example content";
test();
?&gt;'
  ),
);
?>

<div class="row align-items-center">
  <?php
  foreach ($exs as $ex) {
    $number = $ex["number"];
    $code = $ex["code"];
  ?>
    <div class="col-lg-6">
      <h4 class="mb-3">Example <?php echo $number ?></h4>
      <pre>
<code class="language-php"><?php echo $code ?></code>
</pre>
      <div class="d-flex justify-content-end mt-3">
        <a class="btn main-btn" href="./index.php?page=globals&ex=<?php echo $number ?>">Test</a>
      </div>
    </div>
    <div class="col-lg-6 border pt-3 pb-3 output" style="white-space: pre-wrap;">
      <?php
      if (isset($_GET["ex"]) && $_GET["ex"] == $number) {
        include "globals/$number.php";
      }
      ?>
    </div>
  <?php
  }
  ?>
</div>