<?php

function registrationcheck()
{
    require "connection.php";
    
    echo "testing with registration email:";
    echo "<br>";


    $duplicate_user_query="select rc_name, rc_email from register where rc_name='Bee Bee' and rc_email='mama@mglayworld.com'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    $rows_fetched = mysqli_num_rows($duplicate_user_result);

    if($rows_fetched == true)
    {
        echo"fail, email already exists in our database";
    }
    else
    {
        echo"Pass";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Testing with new email:";
    echo "<br>";

    $duplicate_user_query="select rc_name, rc_email from register where rc_name='ydnm' and rc_email='ydnm@gmail.com'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    $rows_fetched = mysqli_num_rows($duplicate_user_result);

    if($rows_fetched == false)
    {
        echo"pass ,username and email can add in database";

    }
    else{
        echo "fail";
    }
}
registrationcheck();
?>