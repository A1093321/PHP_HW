<?php
    session_start();

if(isset($_COOKIE["ACC"])){
    $cookieACC = $_COOKIE["ACC"];
    echo "感謝".$cookieACC."回到本系統";
}
else{
    echo "歡迎初次進入本系統";
}
?>

<html>
<head>
<title>LOGIN</title>
</head>
<body>

<h1><b><FONT COLOR='blue'>登入</FONT></b></h1>

<form action="" method="post" style=": 80%" enctype="multipart/form-data">

    ID  <input type='text' name="ACC" placeholder='ID'><br/><br/><br/>
    PWD  <input type='text' name="PSW" placeholder='PWD'><br/><br/><br/>
    
    <input type='submit' value = '登入'>
</form>

<?php
$aID1="admin";
$aPWD1="admin";
$aID2="user";
$aPWD2="user";

if(isset($_POST["ACC"])){
    if($_POST["ACC"]!=null){
        $ACC=$_POST["ACC"];
        $PSW=$_POST["PSW"];

        if($aID1==$ACC && $aPWD1==$PSW){
            $_SESSION['login']="admin";
            setcookie("ACC",$ACC,time()+17280);
            header('Location: admin.php');
        }else if($aID2==$ACC && $aPWD2==$PSW){
            $_SESSION['login']="user";
            setcookie("ACC",$ACC,time()+17280);
            header('Location: K_form.php');
        }else{
            echo "帳號或密碼輸入錯誤";
            $_SESSION['login']="N";
        }
    }else{
        echo "尚未輸入帳號或密碼";
    }
}else{
    echo "請輸入帳號密碼";
}
?>
</body>
</html>