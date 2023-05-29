<?php
session_start();

/*session is started if you don't write this line can't use $_SESSION  global variable*/

if (isset($_SESSION["email"])) {
  echo $_SESSION["email"];
} else {
  echo "Not Found";
}

/*session was getting*/