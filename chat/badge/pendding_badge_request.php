<?php

    include_once ("../session_destry.php");
    include_once ("../../controller/user_crud.php");
    $newObj = new createUsers();

    $selectedd = $newObj->select_requested($_SESSION['id']);
    if($count = $selectedd->rowCount()){
        echo '<div class="penddingBadgeRequest">
               '.$count.'                         
        </div>';            
    }
    else{
    }
?>
