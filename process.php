<?php
    include("config.php");

    if(!isset($_SESSION['login_user'])){
        #session_start();
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $username=mysqli_real_escape_string($con,$_POST['username']);
            $password=mysqli_real_escape_string($con,$_POST['password']);

            $sql="SELECT * FROM users WHERE username = '$username' and password = '$password'";

            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);

            $count=mysqli_num_rows($result);

            if($count == true){
                $_SESSION['login_user']=$username;

                header("location:elements.php");
            }
            else{
               #echo '<script language="javascript">';
               #echo 'alert("Invalid")';
               #echo '</script>';


               echo "<script type='text/javascript'>alert('Wrong Username or Password');
               window.location='login.php';
               </script>";

               

              # header("location:login.php");
            }
    }
}
?>