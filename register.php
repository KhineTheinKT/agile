<?php
if(isset($_POST['usertwice']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    
    $name= $_POST['name'];
    $email= $_POST['email'];
    $ph= $_POST['ph'];
    $rid= uniqid();

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $user="INSERT INTO `register`(`rc_name`, `re_id`, `rc_email`, `rc_ph`) 
    VALUES ('$name','$rid','$email','$ph')";
    
    $result = mysqli_query($connect,$user);
    
        if($result)
        {
            echo 'Data Inserted';
        }
        else{
            echo 'data not Inserted';
        }
        //mysqli_free_result ($result);
        mysqli_close ($connect);

}
?>