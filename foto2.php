<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";
    
    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $raw_results=mysqli_query($connect,"SELECT * FROM addfoto");
    
    $count=mysqli_num_rows($raw_results);
    if($count > 0){
        while($results=mysqli_fetch_array($raw_results)){
        
            $GLOBALS['id']=$results['foto'];
        $GLOBALS['title']=$results['ev_name'];
        $pass = $results['ev_id'];
        $GLOBALS['date']=$results['ev_date'];
    }
    }
    else{
        echo "No results";
    }

?>