<?php
session_start();
unset($_SESSION['user']);
echo "<script>history.back()</script>";
die();