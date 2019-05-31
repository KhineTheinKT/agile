<?php

function registrationcheck()
{
    require "connection.php";
    
    echo "testing with registed email:";
    echo "<br>";

    $duplicate_user_query="select rc_email from register where rc_email='mama@mglayworld.com'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    $rows_fetched = mysqli_num_rows($duplicate_user_result);

    if($rows_fetched == true)
    {
        echo"fail, email already exists in database";
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

    $duplicate_user_query="select rc_email from register where rc_email='ydnm@gmail.com'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    $rows_fetched = mysqli_num_rows($duplicate_user_result);

    if($rows_fetched == false)
    {
        echo"pass ,username and email can add in database";

    }
    else{
        echo "fail";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // echo "Testing with phone number:";
    // echo "<br>";

    // $duplicate_user_query= "select rc_ph from register where rc_ph='8791245'":
    // $duplicate_user_query= "select rc_ph from register where rc_ph='3432423423'":
    // $duplicate_user_query= "select rc_ph from register where rc_ph=' '":
    

    // $duplicate_user_query= mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    // $rows_fetched = mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    // if($rows_fetched == false)
    // {
    //     echo"pass ,phone number can add in database";

    // }
    // else{
    //     echo "fail";
    // }

    #echo"<br>";
    #echo"<br>";
    #echo"<br>";

    #echo "Testing with worng phone:"
    #echo "<br>";

    #$duplicate_user_query= "select rc_ph from register where rc_ph=''":
    #$duplicate_user_query= "select rc_ph from register where rc_ph=' '":

    #$duplicate_user_query= mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    #$rows_fetched = mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));


}
registrationcheck();
?>