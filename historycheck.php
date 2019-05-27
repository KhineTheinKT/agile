<?php

function cuhistorycheck()
{
    require "connection.php";
    
    echo "testing with wrong email:";
    echo "<br>";


    $duplicate_user_query="select ticket_id, email from customer_history where ticket_id='5ce9a1b701' and email='alex@gmail.com'";
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


    echo "Testing with new email:";
    echo "<br>";
    echo "\n";

    $duplicate_user_query="select ticket_id, email from customer_history where ticket_id='tck123' and email='ydnm@gmail.com'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    $rows_fetched=mysqli_num_rows($duplicate_user_result);

    if($rows_fetched == false)
    {
        echo"pass ,username and email can add in database";

    }
    else{
        echo "fail";
    }
}
cuhistorycheck();
?>