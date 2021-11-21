<?php

$user = 'root';
$pass = '';
$db = 'users';

$db = new mysqli('localhost', $user,$pass, $db) or die("Unable to connect");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST ['user_name'];
    $password = $_POST ['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $query  = "select * from register where user_name = '$user_name' limit 1";

        $result = mysqli_query($db, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) >0) 
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password)
                {
                    header("Location: homepage.php");
                    die;
                }

            }
        }
        echo "Wrong Creditials, please try again";
    }
    else
    {
        echo "Please enter valid information";
    }

}
?>