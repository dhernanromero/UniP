<?php
    $mysqli = new $mysqli ('localhost','root','','unip');
    if($mysqli->connect_errno):
            echo "error al conectarse a My SQL debido al error" .$mysqli->connect_arror;
    endif;
?>