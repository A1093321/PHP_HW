<?php
require("DBconnect.php");
$pNo=$_POST["pNo"];

$pathpart=pathinfo($_FILES['photo']['name']);
$extname=$pathpart['extension'];
$new_finalphoto="Photo_".time().".".$extname;
$date=date('Y-m-d');

$SQL="UPDATE photo SET ppath = '$new_finalphoto', pdate = '$date' WHERE pNo = $pNo";

if(copy($_FILES["photo"]["tmp_name"], $new_finalphoto))
//複製檔案
    if(mysqli_query($link, $SQL)){
        echo "alert('照片更改成功');";
        header('Location: photolist.php');
    }else{
        echo "alert('照片更改失敗');";
        header('Location: photolist.php');
    }
else{
    echo "alert('照片更改失敗');";
    header('Location: photolist.php');
}

?>    
