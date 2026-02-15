<?php

session_start();
session_unset();
session_destroy();
header("Location: /forum/index.php?logoutsuccess=true");
exit();

?>