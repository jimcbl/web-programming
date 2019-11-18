<?php
session_start();
session_destroy();
setcookie("SESSION_ID", 0, time() - 1);
header('Location: index.php');
