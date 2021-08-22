<?php require '../controllers/loginController.php'?>

<div class="row" style="flex-direction: row-reverse;">
    <ul class="list-group" style="width: 300px;">
        <li class="list-group-item active" 
        style="background-color: #11ad3a;border-color: #11ad3a; 
        font-weight: bolder;text-align: center;">ĐĂNG NHẬP</li>
    </ul>
    <form style="font-size: 12px;" id="formLogin">

        <div class="form-group" style="display: inline-flex;">
            <label for="userName">Tên Đăng nhập</label>
            <input type="email" class="form-control" id="userName">
        </div>
        <div class="form-group" style="display: inline-flex;">
            <label for="passWord">Mât Khẩu</label>
            <input type="password" class="form-control" id="passWord">
        </div>
        <button onclick="handleBtLogin()" class="btn btn-outline-dark">Đăng nhập</button>
    </form>
</div>

<script src='../assets/js/handleBtLogin.js'></script>
<script src='../assets/js/handleLoadWhenLogin.js'></script>
<script src='../assets/js/handleLogOut.js'></script>
<script>handleLoadWhenLogin();</script>
