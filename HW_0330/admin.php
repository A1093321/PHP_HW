<?php
    session_start();
    if($_SESSION['login']=="admin"){
        echo "<a href=logout.php>logout</a>";
        echo "<h1>Welcome to Admin!!</h1>";
    }else{
        echo "<h1>非法進入</h1><br/>";
        echo "<a href='http://localhost/login.php'>回登入頁</a></br>";
        exit();
    }
?>