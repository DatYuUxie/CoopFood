<?php 
    session_start();
    if(session_destroy()){
        header("Location: http://localhost/web222/User/sign_in");
    }
?>