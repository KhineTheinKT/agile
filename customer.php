
<?php

if(isset($_POST['userbuy']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    

    $name= $_POST['name'];
    $email= $_POST['email'];
    $ph= $_POST['ph'];
    $add1= $_POST['add1'];
    $qty= $_POST['qty'];
    $tid= uniqid();
    $total = $qty*130;

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $user="INSERT INTO `customer_history`(`c_name`, `email`, `address`, `event_id`, `ticket_id`, `phno`, `qty`) 
    VALUES ('$name','$email','$add1','usg','$tid','$ph','$qty')";
    
    $result = mysqli_query($connect,$user);
    
    if($result)
    {
        echo 'Data Inserted';

        echo 'Total amount =' ,$total;
      
    }else{
        echo 'data not Inserted';
    }
    mysqli_close ($connect);

}
if(isset($_POST['userbuybp']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    

    $name= $_POST['name'];
    $email= $_POST['email'];
    $ph= $_POST['ph'];
    $add1= $_POST['add1'];
    $qty= $_POST['qty'];
    $tid= uniqid();
    $total = $qty*220;

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $user="INSERT INTO `customer_history`(`c_name`, `email`, `address`, `event_id`, `ticket_id`, `phno`, `qty`) 
    VALUES ('$name','$email','$add1','bpthai','$tid','$ph','$qty')";
    
    $result = mysqli_query($connect,$user);
    
    if($result)
    {
        echo 'Data Inserted';
        echo 'Total amount =' ,$total;
 
    }else{
        echo 'data not Inserted';
    }
    mysqli_close ($connect);

}
if(isset($_POST['userbuyku']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    

    $name= $_POST['name'];
    $email= $_POST['email'];
    $ph= $_POST['ph'];
    $add1= $_POST['add1'];
    $qty= $_POST['qty'];
    $tid= uniqid();
    $total = $qty*200;

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $user="INSERT INTO `customer_history`(`c_name`, `email`, `address`, `event_id`, `ticket_id`, `phno`, `qty`) 
    VALUES ('$name','$email','$add1','ukorea','$tid','$ph','$qty')";
    
    $result = mysqli_query($connect,$user);
    
    if($result)
    {
        echo 'Data Inserted';
        echo 'Total amount =' ,$total;
    }else{
        echo 'data not Inserted';
    }
    mysqli_close ($connect);

}
if(isset($_POST['buytshirt']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    

    $name= $_POST['name'];
    $email= $_POST['email'];
    $ph= $_POST['ph'];
    $add1= $_POST['add1'];
    $qty= $_POST['qty'];
    $tid= uniqid();
    $total = $qty*30;

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $user="INSERT INTO `customer_history`(`c_name`, `email`, `address`, `event_id`, `ticket_id`, `phno`, `qty`) 
    VALUES ('$name','$email','$add1','ultshirt','$tid','$ph','$qty')";
    
    $result = mysqli_query($connect,$user);
    
    if($result)
    {
        echo 'Data Inserted';
        
        echo 'Total amount = ',$total;
      
    }else{
        echo 'data not Inserted';
    }
    mysqli_close ($connect);

}
if(isset($_POST['buylight']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    

    $name= $_POST['name'];
    $email= $_POST['email'];
    $ph= $_POST['ph'];
    $add1= $_POST['add1'];
    $qty= $_POST['qty'];
    $tid= uniqid();
    $total = $qty*20.99;

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $user="INSERT INTO `customer_history`(`c_name`, `email`, `address`, `event_id`, `ticket_id`, `phno`, `qty`) 
    VALUES ('$name','$email','$add1','ultshirt','$tid','$ph','$qty')";
    
    $result = mysqli_query($connect,$user);
    
    if($result)
    {
        echo 'Data Inserted';
        
        echo 'Total amount = ',$total;
      
    }else{
        echo 'data not Inserted';
    }
    mysqli_close ($connect);

}
if(isset($_POST['buycandy']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    

    $name= $_POST['name'];
    $email= $_POST['email'];
    $ph= $_POST['ph'];
    $add1= $_POST['add1'];
    $qty= $_POST['qty'];
    $tid= uniqid();
    $total = $qty*25.99;

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $user="INSERT INTO `customer_history`(`c_name`, `email`, `address`, `event_id`, `ticket_id`, `phno`, `qty`) 
    VALUES ('$name','$email','$add1','ultshirt','$tid','$ph','$qty')";
    
    $result = mysqli_query($connect,$user);
    
    if($result)
    {
        echo 'Data Inserted';
        
        echo 'Total amount = ',$total;
      
    }else{
        echo 'data not Inserted';
    }
    mysqli_close ($connect);

}
if(isset($_POST['adm1']))
{
    include "config.php";
    echo "hello world";
    
    $raw_results=mysqli_query($con, "SELECT * FROM customer_history");
    
    
    $count=mysqli_num_rows($raw_results);

    if($count > 0){
        while($results=mysqli_fetch_array($raw_results)){
        
        $id=$results['c_id'];
        $cname=$results['c_name'];
        $email = $results['email'];
        $address = $results['address'];
        $eid = $results['event_id'];
        $tid = $results['ticket_id'];
        $ph = $results['phono'];
        $date = $results['date'];
        $qty = $results['qty'];
        

                echo '<p><h2>'.$id.'</a></h2>'.'<h3><i>'.$cname.'</i></h3>'.$email.'</p><br>';
    }
    }
    else{
        echo "No results";
    }
    echo $id;
    // if($result1)
    // {
    //     echo $sql1;
      
    // }else{
    //     echo 'data not Inserted';
    // }
    //mysqli_close ($connect);

}
?>

