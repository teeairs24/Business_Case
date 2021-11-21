<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

if(!$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Fail to connect!");
}
else
{
    echo "Successfully Conected";
}

