<?php
require("DBconnect.php");
//$phototmpname=$_FILES["photo"]["tmp_name"];
//echo $phototmpname;

$pathpart=pathinfo($_FILES['photo']['name']);
$extname=$pathpart['extension'];
//echo $extname;(副檔名)

$finalphoto="Photo_".time().".".$extname;
//新檔案名稱(時間同時，檔名會重複)
echo $finalphoto;

$SQL="INSERT INTO photo (ppath, pdate) VALUES ('$finalphoto', '".date('Y-m-d')."')";

if(copy($_FILES["photo"]["tmp_name"], $finalphoto))
//複製檔案
    if(mysqli_query($link, $SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('照片上傳失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
    }
else{
    echo "<script type='text/javascript'>";
    echo "alert('照片上傳失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=photo.php'>";
}

?>    
