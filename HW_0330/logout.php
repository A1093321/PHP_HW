<?php
    session_start();
    session_destroy();
    setcookie("ACC",$ACC,time()-1);
    header('Location: login.php')
?>