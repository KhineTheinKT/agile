<?php
    include "config.php";

    $query=$_GET['search'];
    $min_length=3;

    if(strlen($query) >= $min_length){
        #$query=htmlspecialchars($query);

        #$query=mysqli_real_escape_string($query);

        $raw_results=mysqli_query($con, "SELECT * FROM article
         WHERE (`title` LIKE '%".$query."%') OR (`description` LIKE '%".$query."%') OR (`place` LIKE '%".$query."%') OR (`link` LIKE '%".$query."%') " ) or die(mysql_error());

        $count=mysqli_num_rows($raw_results);

        if($count > 0){
            while($results=mysqli_fetch_array($raw_results)){
                #print_r ('<p><h2><a href="' .$results. '.php">'.$results['title'].'</a></h2>'.'<h3><i>'.$results['place'].'</i></h3>'.$results['description'].'</p>');

                $title=$results['title'];
                $place=$results['place'];
                $desc=$results['description'];
                $link=$results['link'];

                echo '<p><h2>'.$title.'</a></h2>'.'<h3><i>'.$place.'</i></h3>'.$desc.
                '<br><b><a href="' .$link.'">'.$link.'</a></b>'.'</p><br>';
            }
        
        }
        else{
            echo "No results";
        }

    }
?>