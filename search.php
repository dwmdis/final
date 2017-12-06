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
                
                // have to link to page using page name
            }
        
        }    
    }
?>