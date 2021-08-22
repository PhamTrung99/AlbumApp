function handleLoadWhenLogin() {
    var userName = document.cookie;
    if (userName != "") { 
        document.getElementById("formLogin").innerHTML = `<div class="div" style="font-size:25px;text-align: center">Chào ${userName} </div>
        <div class="row" ><img src="../assets/image/avatar.jpeg" width="100px" height="100px"></div>
        <button class="btn btn-outline-dark" onclick="handleLogOut()">Thoát</button>`
    } else {
      
    }
};