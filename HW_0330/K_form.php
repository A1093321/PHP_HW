<?php
    session_start();    
    if($_SESSION['login']=="user"){
        echo "<a href=logout.php>logout</a>";
    }else{
        echo "<h1>非法進入</h1><br/>";
        echo "<a href='http://localhost/login.php'>回登入頁</a></br>";
        exit();
    }   
?>

<html>
<head>

<link rel='icon' href='/nuk.bmp' type='image/x-icon' />
<title>墾丁三日遊</title>

</head>

<body bgcolor='#EEFFA6'> 

<h1><b><CENTER><FONT COLOR='red'>墾丁三日遊</FONT></CENTER></b></h1>
<hr color='#A8FFE8' width='500'><br/>
<CENTER><a href='https://www.nuk.edu.tw/'><img src='/nuk.bmp' width='12.33%'></a>
<a href='https://www.pthg.gov.tw/Content_List.aspx?n=CB677664C5CE6E8A/'><img src='/K.jpg' width='20%'></a>
<form action="rinfo.php" method="post" style=": 80%" enctype="multipart/form-data"><br/><br/>

    Please input your Name: <input type='text' name="name" placeholder='name'><br/><br/><br/>
    Please input your StudentID: <input type='text' name="ID" placeholder='A10933XX'><br/><br/><br/>
    Please input your Email: <input type='email' name="email" placeholder='email'><br/><br/><br/>
    Please input your PhoneNumber: <input type='text' name="tel" placeholder='09XX-XXX-XXX'><br/><br/><br/>
    Please input your PassWord: <input type='text' name="PWD" placeholder='password'><br/><br/><br/>
    Please input your birthday: <input type='date' name="bir"><br/><br/><br/>
    Please choose your gender: <input type='radio' name="sex" value="1">男<input type='radio' name="sex" value="2">女<input type='radio' name="sex" value="3">其他<br/><br/><br/>
    Please choose your T-shirt size: <select name="size"><option>S</option><option>M</option><option>L</option><option>XL</option></select><br/><br/><br/>
    Please choose your favorite color: <input type="color" name="color"><br/><br/><br/>
    Please choose your food preference: <input type='checkbox' name="food[]" value="肉類">肉類<input type='checkbox' name="food[]" value="蔬菜">蔬菜<input type='checkbox' name="food[]" value="甜點">甜點<input type='checkbox' name="food[]" value="炸物">炸物<br/><br/><br/>
    Please input tickets you need: <input type='number' name="tickets"><br/><br/><br/>
    Please choose the city you prefer: <select name='city'><option>高雄</option><option>台東</option></select><br/><br/><br/>
    Please leave your comment: <textarea cols='50' rows='1' name='comment'></textarea><br/><br/><br/>
    Please upload your photo: <input type='file' name='photo'><br/><br/><br/>

<input type='submit'></CENTER>

</form>

<h1><b><CENTER><FONT COLOR='red'>活動使用</FONT></CENTER></b></h1>
<hr color='#A8FFE8' width='500'>
<br/><CENTER>
    Please input the Time now: <input type='time'><br/><br/><br/>
    How you prefer to dance: <input type='range'><br/><br/><br/>
    How you prefer to play baseball: <input type='range'><br/><br/><br/>
    How you prefer to play basketball: <input type='range'><br/><br/><br/>
    How you prefer to play football: <input type='range'><br/><br/><br/>
    How you prefer to play volleyball: <input type='range'><br/><br/><br/>
    How you prefer to play badminton: <input type='range'><br/><br/><br/>
    How you prefer to swim: <input type='range'><br/><br/><br/>

<input type='submit'><br/><br/><br/>

<h3><CENTER>衣服尺碼對照表</CENTER></h3>

<table border=10>
<TR><TH>null</TH><TH>S</TH><TH>M</TH><TH>L</TH><TH>XL</TH></TR>
<TR><TH>肩寬</TD><TD>37</TD><TD>38</TD><TD>39</TD><TD>40</TD></TR>
<TR><TH>胸圍</TD><TD>80</TD><TD>85</TD><TD>90</TD><TD>95</TD></TR>
<TR><TH>腰圍</TD><TD>64</TD><TD>68</TD><TD>72</TD><TD>76</TD></TR>
</table>
</CENTER>


</body>

</html>