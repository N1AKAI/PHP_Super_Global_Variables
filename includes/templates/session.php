<?php
$exs = array(
  array(
    "number" => 1,
    "desciption" => "Creating New Session",
    "code" => '&lt;?php
session_start();

/*session is started if you don\'t write this line can\'t use $_SESSION  global variable*/

$_SESSION["email"] = "saad.aboulhoda@gmail.com";

echo "Created Successfully";
?&gt;'
  ),
  array(
    "number" => 2,
    "desciption" => "Getting Session",
    "code" => '&lt;?php
session_start();

/*session is started if you don\'t write this line can\'t use $_SESSION  global variable*/

if (isset($_SESSION["email"])) {
  echo $_SESSION["email"];
} else {
  echo "Not Found";
}

/*session was getting*/
?&gt;'
  ),
  array(
    "number" => 3,
    "desciption" => "Updating Session",
    "code" => '&lt;?php
session_start();

/*session is started if you don\'t write this line can\'t use $_SESSION  global variable*/

if (isset($_SESSION["email"])) {
  $_SESSION["email"] = "saad@aboulhoda.ma";
  echo "Updated Successfully";
} else {
  echo "Not Found";
}

/*session updated*/
?&gt;'
  ),
  array(
    "number" => 4,
    "desciption" => "Deleting Session",
    "code" => '&lt;?php
session_start();

/*session is started if you don\'t write this line can\'t use $_SESSION  global variable*/

unset($_SESSION["email"]);

/* or you can use "session_unset()" */

/*session deleted. if you try using this you\'ve got an error*/
?&gt;'
  )
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
        <a class="btn main-btn" href="./index.php?page=session&ex=<?php echo $number . '#' . $number ?>">Test</a>
      </div>
    </div>
    <div class="col-lg-6 border pt-3 pb-3 output" style="white-space: pre-wrap;">
      <?php
      if (isset($_GET["ex"]) && $_GET["ex"] == $number) {
        include "session/$number.php";
      }
      ?>
    </div>
  <?php
  }
  ?>
</div>