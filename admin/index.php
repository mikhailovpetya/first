<?php
session_start();
require_once ('../lib/func.php');
$username=checkAuth();
if ( $username == false){
    //showLoginForm();
    include_once ('./view/login.html');
    logIn();
    //echo 'FALSE';
}else{
    /*echo 'TRUE';
    echo $username;
    echo '<a  href="/admin/logout.php">exit</a>';*/
    include_once ('./view/blank.html');
}
?>