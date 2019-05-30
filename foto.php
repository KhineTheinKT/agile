<?php
$GLOBALS['id'] = "";
if(isset($_POST['adm']))
{

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    
    
        
    $ploc= $_POST['lphoto'];
    $pname= $_POST['lname'];
    $pid= $_POST['lid'];
    $pdate= $_POST['ldate'];

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $user="UPDATE `addfoto` SET foto = '$ploc', ev_name = '$pname', ev_id = '$pid', ev_date = '$pdate' WHERE arr = 1";
    
    $result = mysqli_query($connect,$user);

    if($result)
    {
        echo 'Data Inserted';
        include "config.php";
        $raw_results=mysqli_query($con, "SELECT * FROM addfoto");
    
    
    $count=mysqli_num_rows($raw_results);

    if($count > 0){
        while($results=mysqli_fetch_array($raw_results)){
        
            $id=$results['foto'];
        $title=$results['ev_name'];
        $pass = $results['ev_id'];
        

                echo '<p><h2>'.$title.'</a></h2>'.'<h3><i>'.$pass.'</i></h3>'.$id.'</p><br>';
    }
    }
    else{
        echo "No results";
    }
    
    }else{
        echo 'data not Inserted';
    }
    mysqli_close ($connect);

    
}
if(isset($_POST['adm1']))
{
    include "config.php";
    
    $raw_results=mysqli_query($con, "SELECT * FROM customer_history");
    
    
    $count=mysqli_num_rows($raw_results);

    if($count > 0){
       # while($results=mysqli_fetch_array($raw_results)){
        
        // $id=$results['c_id'];
        // $cname=$results['c_name'];
        // $email = $results['email'];
        // $address = $results['address'];
        // $eid = $results['event_id'];
        // $tid = $results['ticket_id'];
        // $ph = $results['phno'];
        // $date = $results['date'];
        // $qty = $results['qty'];
        
        echo "<table><tr><th> Customer ID  </th><th>Customer Name</th> <th>Email</th> <th>Ticket ID </th> <th>Date</th></tr>";

        while($row = mysqli_fetch_array($raw_results)) {
            echo "<tr><td>" . $row["c_id"]. "</td><td>" . $row["c_name"]. "</td><td>" . $row["email"]. "</td><td>"  . $row["ticket_id"]. "</td><td>"  . $row["date"].    "</td></tr>";
        }
        echo "</table>";
                #echo '<p><h2>'.$id.'</a></h2>'.'<h3><i>'.$cname.'</i></h3>'.$email.'</p><br>';
    
    }
    else{
        echo "No results";
    }

}
?>
