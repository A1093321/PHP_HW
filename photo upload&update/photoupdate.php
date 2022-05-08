<?php
require("DBconnect.php");
$pNo=$_GET["pNo"];

$SQL="SELECT * FROM photo WHERE pNo = $pNo";
if ( $result=mysqli_query($link,$SQL) ){
    while( $row=mysqli_fetch_assoc($result) ){
        $ppath=$row['ppath'];
        $pdate=$row['pdate'];
    }
}

?>
<h1><b>更新照片</b></h1>
<form action="photo_update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name ="pNo" value='<?php echo $pNo;?>'>

<input type="file" name="photo" accept="image/*"><br/><br/>
<input type="submit" value="更新照片">

</form>