<?php require '../controllers/indexController.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <title>Album App</title>
</head>

<body>
    <div class="container" style="margin: 10px">
        <div class="row" style="">
            <img src="../assets/image/banner.jpg" height="400px" width="1200px" />
        </div>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-6"></div>
            <div class="col-md-6" style="text-align: end;"><a class="btn btn-dark" href="#" role="button">Tìm kiếm
                </a>
                <a class="btn btn-dark" href="#" role="button">Thêm bài
                    hát mới</a>
                <a class="btn btn-dark" href="#" role="button">Thêm
                    Album</a>
            </div>
        </div>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-2">
                <div class="row">
                    <?php include './partials/genresSideBar.php' ?>
                </div>
                <div class="row">
                    <?php include './partials/artistSideBar.php' ?>
                </div>
            </div>
            <div class="col-md-7" style="margin-left: 20px;margin-right: 20px;">
                <div class="row">TÌM KIẾM</div>
                <div class="row">
                    <div class="col-md-2">
                        Từ khoá
                    </div>
                    <div class="col-md-4">
                        <input type="input" id="searchText" />
                    </div>
                    <div class="col-md-1">
                        <button type="submit" onclick="" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg></button>
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="margin-left: 100px;">
                    <label for="vehicle1">Ca sĩ</label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car" style="margin-left: 10px;">
                    <label for="vehicle2">Album</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat" style="margin-left: 10px;">
                    <label for="vehicle3">Bài hát</label><br><br>
                </div>
                <hr class="solid">
                <div class="row">Kết quả</div>
                <div class="row" style="padding: 15px 0px 5px 25px;">>> BÀI HÁT</div>
                <div class="row">
                    <ul class="list-group" style="width: 664px;">
                        <li class="list-group-item">bai 1 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path
                                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                            </svg></li>
                        <li class="list-group-item">bai 2 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                <path
                                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                            </svg></li>
                    </ul>
                </div>

                <div class="row" style="padding: 15px 0px 5px 25px;">>> ALBUM</div>
                <div class="row">
                    <ul class="list-group" style="width: 664px;">
                        <li class="list-group-item">bai 1</li>
                        <li class="list-group-item">bai 2</li>
                    </ul>
                </div>

                <div class="row" style="padding: 15px 0px 5px 25px;">>> CA SĨ/ NHÓM NHẠC</div>
                <div class="row">
                    <ul class="list-group" style="width: 664px;">
                        <li class="list-group-item">bai 1</li>
                        <li class="list-group-item">bai 2</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row" style="flex-direction: row-reverse;">
                    <ul class="list-group" style="width: 300px;">
                        <li class="list-group-item active">Đăng nhập</li>
                    </ul>
                    <form style="font-size: 12px;">
                        <div class="form-group" style="display: inline-flex;">
                            <label for="userName">Tên Đăng nhập</label>
                            <input type="email" class="form-control" id="userName">
                        </div>
                        <div class="form-group" style="display: inline-flex;">
                            <label for="passWord">Mât Khẩu</label>
                            <input type="password" class="form-control" id="passWord">
                        </div>
                        <button type="submit" class="btn btn-dark">Đăng nhập</button>
                    </form>
                </div>
                <div class="row" style="flex-direction: row-reverse;">
                <?php include './partials/albumSideBar.php' ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="" style="margin-left: 24rem;
                            font-size: 22px;
                            line-height: 73px;
                            letter-spacing: 0.08em;
                            font-weight: 200;
                            font-style: normal;">1712848 - Phạm Quốc Trung</div>
        </div>
    </div>


    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>