<?php
    foreach($json["data"] as $server){
        echo $server["attributes"]["identifier"] . " - " . $server["attributes"]["name"] . "<br>";
    }
?>