<?php
include("../dbconfig.php");
include('../isLogin.php');
if (isset($_POST['cName'])) {
    $cName=$_POST['cName'];
    date_default_timezone_set("Asia/Shanghai");
    $date=date("Y/m/d H:i:s",time());
    $sql="INSERT INTO `brand` (`id`, `cName`, `imageTop`, `wenhua`, `imageCenter`, `date`) VALUES (NULL, '$cName', '', '', '', '$date')";
    $query=mysql_query($sql);
    if ($query) {
        echo "<script>alert('添加成功！')</script>";
        echo "<script>window.location.href='mainFrame.php'</script>";
    }else{
        echo "<script>alert('添加失败！')</script>";
        echo "<script>window.location.href='mainFrame.php'</script>";
    }
}
?>
<form action="brand_add.php" method="post" accept-charset="utf-8">
    <label>请输入品牌名称</label>
    <input type="text" name="cName" value="">
    <input type="submit" value="确认添加">
</form>