function handleLoadWhenLogin() {
    var userName = document.cookie;
    if (userName != "") { 
        document.getElementById("formLogin").innerHTML = `<div class="div" style="font-size:25px;">Chào ${userName} </div>
    <button class="btn btn-outline-dark" onclick="handleLogOut()">Thoát</a>`
    } else {
      
    }
};