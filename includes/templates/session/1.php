<?php
session_start();

/*session is started if you don't write this line can't use $_SESSION  global variable*/

$_SESSION["email"] = "saad.aboulhoda@gmail.com";

echo "Created Successfully";
