<?php

session_start();
session_destroy();

echo "<script> window.location = 'pages-login.php' </script>";
