function handleBtLogin() {
    var userName = document.getElementById("userName").value;
    var passWord = document.getElementById("passWord").value;

    if (userName == "" || passWord == "") {
        window.alert("Vui lòng điền đủ thông tin !!");
    } else {
        window.location.replace(
            `http://localhost/AlbumApp/views/index.php?userName=${userName}&passWord=${passWord}`
        )
    }
};