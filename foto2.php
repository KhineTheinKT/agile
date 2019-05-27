<?php
function take() {
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName ="agile";

    $con= mysqli_connect($hostname,$username,$password,$databasename);

    $raw_results=mysqli_query("SELECT * FROM addfoto");
    
    $count=mysqli_num_rows($raw_results);
    if($count > 0){
        while($results=mysqli_fetch_array($raw_results)){
        
            $GLOBALS['id']=$results['foto'];
        $title=$results['ev_name'];
        $pass = $results['ev_id'];
        
            echo  $GLOBALS['id'];
              
    }
    }
    else{
        echo "No results";
    }
    
}
take();
echo $GLOBALS['id'];
?>