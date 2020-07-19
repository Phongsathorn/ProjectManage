<?php
    session_start();
    unset($_SESSION['usernameguest']);
    session_destroy();
    header( "refresh: 0; url=/homeBD" );
    exit(0);
?>