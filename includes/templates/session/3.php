<?php
session_start();

/*session is started if you don't write this line can't use $_SESSION  global variable*/

if (isset($_SESSION["email"])) {
  $_SESSION["email"] = "saad@aboulhoda.ma";
  echo "Updated Successfully";
} else {
  echo "Not Found";
}

/*session updated*/