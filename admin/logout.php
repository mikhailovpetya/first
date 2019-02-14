<?php
session_start();
require_once ('../lib/func.php');
unset($_SESSION['userName']);
//echo 'ПОКЕДОВА <a  href="/admin/index.php">Вход</a>';
showAlert('ПОКЕДОВА');
goUri('/admin/index.php');