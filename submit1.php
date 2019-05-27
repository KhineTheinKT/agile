<?php
    include "config.php";

    $sql1 = "SELECT * FROM change";
    echo "Hello";
    echo $sql1; 
    $result1 = mysqli_query($connect,$sql1);

    $count=mysqli_num_rows($result1);

    if($count>0){
        while($totalres=mysqli_fetch_array($result1)){
            
            $arr=$totalres['arr'];
            $location=$totalres['location'];
            $ev_name=$totalres['ev_name'];


            echo '<p>id :'.$arr.'<h2>Location: '.$location.'</h2>'.'<i>e name: '.$ev_name.'</i>'.'</p>';
        }
    }
    else{
        echo "No results";
    }

?>