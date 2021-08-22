<?php 
require_once '../model/load.php';

if(isset($_GET['userName']) && isset($_GET['passWord'])){
    $username = $_GET['userName'];
    $password = $_GET['passWord'];
    $userInfo = $loadFromUser->login($username,$password);
    if($userInfo->UserName != ""){
        echo "<script type='text/javascript'>document.cookie='$userInfo->UserName'</script>";
    }else {
        echo "<script type='text/javascript'>window.alert('Tài Khoản hoặc mật khẩu không tồn tại !!');</script>";
    }
}


?>