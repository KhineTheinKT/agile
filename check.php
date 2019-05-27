<?php

function logincheck()
{
    require "connection.php";

    // echo "Testing with wrong login:";
    // echo "\n";
    // $duplicate_user_query="select username, password from users where username = 'ydnm@gmail.com' and password='12345'";
    // $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    // $rows_fetched=mysqli_num_rows($duplicate_user_result);

    // if($rows_fetched == False)
    // {
    //     echo "fail";
    // }
    // else 
    // {
    //     echo "pass";
    // }

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";


    echo "Testing with correct login:";
    echo "\n";

  
    $duplicate_user_query = "select username, password from users where username = 'admin' and password='123'";
    
    $duplicate_user_result = mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    $rows_fetched=mysqli_num_rows($duplicate_user_result);

    if($rows_fetched == TRUE ) 
    {
        echo "pass   ,correct username and password";
    }
    else 
    {
        echo "fail";
    }

}
logincheck();
?>