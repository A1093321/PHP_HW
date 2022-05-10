<?php
require("DBconnect.php"); 

$email = $_POST["email"];

$SQL="SELECT * FROM email_subscription";
$SQL1="INSERT INTO email_subscription (email) VALUES ('$email')";
$result=mysqli_query($link,$SQL);

while( $row=mysqli_fetch_assoc($result) ){
    if ($email == $row["email"]){
        echo "<script type='text/javascript'>";
        echo "alert ('已加入訂閱');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=mail.php'>";   
        exit;
    }
}

if ( mysqli_query($link, $SQL1) ){
    echo "<script type='text/javascript'>";
    echo "alert ('成功加入訂閱');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=mail.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert ('訂閱失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=email.php'>";
}


?>