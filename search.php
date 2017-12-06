<?php
    require_once "assets/inc/db_conn.php";

    $mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(!$mysqli)
    {
        echo "connection error: " . mysqli_connect_error();
        die();
    }
    else
    {
        if(!empty($_POST))
        {
            $search_in = htmlentities(strip_tags($_POST["search_input"]));
        
            $query = "SELECT PageName, Tag FROM searchtags WHERE Tag = '$search_in'";
            
            $result = mysqli_query($mysqli,$query);
            
            if($result)
            {
                $row = mysqli_fetch_assoc($result);
                $page_name = $row["PageName"];
                $section = $row["Section"];
                
                // have to link to page using page name
                // header("Location: http://serenity.ist.rit.edu/~iste240t04/240/final/'$section'/'$page_name'");
                // die();
                echo "<script> window.location = 'http://serenity.ist.rit.edu/~iste240t04/240/final/" . $section . "/" . $page_name . "';</script>";
            }
        
        }    
    }
?>