<?php
include_once "config.php";

// Do a check that the header data contains a passphrase
$passphrase = $_SERVER['HTTP_PASSPHRASE'] ?? "";
if($passphrase != $PASSPHRASE){
    die("Input Error");
}