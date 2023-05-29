<?php
session_start();

/*session is started if you don't write this line can't use $_SESSION  global variable*/

unset($_SESSION["email"]);

/* or you can use "session_unset()" */

/*session deleted. if you try using this you've got an error*/