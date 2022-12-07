<?php

session_start();
if(session_destroy()){
    
    header('Location: ../Web_Kelurahan_Kepuharjo/landingpage.php');
}

?>