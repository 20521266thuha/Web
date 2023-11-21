<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN - MIA BOOKCORNER</title>
    <link rel="stylesheet" href="../Style/login-style.css"> 
</head>
<body>
    <form action="login.php" method="post">
        <div id="login-container" style=" width: 100%; height: 100%">
            <div class="container-content">
                <div class="container-content-left">
                    <img src="../Assets/LoginBox.png"/>
                </div>
                <div class="container-content-right">
                    <p class="title" style="color: #046543; font-size: 20px;margin-top: 20px;"><b>CHÀO MỪNG ĐẾN VỚI MIA BOOKCORNER!</b></p>
                    <p class="title" style="color: #9ba9a4; font-size: 14px">Đăng nhập tài khoản của bạn</p>

                    <?php if (isset($_GET['error'])) { ?>
     		            <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>

                    <p class="title" style="color: #046543;margin-top: 30px; font-size: 16px"><b>Số điện thoại</b></p>
                    <input type="text" name="uname" placeholder="Username" style="width: 323px; height: 31px" />
                    <p class="title" style="color: #046543;margin-top: 30px; font-size: 16px"><b>Mật khẩu</b></p>
                    <input type="password" name="pass" placeholder="Password" style="width: 323px; height: 31px" />
                    <button class="button" style="color: #F6C017; padding: 10px; text-decoration: none;"><b>ĐĂNG NHẬP</b></a></button>
                    <p class="title" type="submit" style="color: #9ba9a4; margin-top: 10px; margin-left:115px; font-style: italic; font-size: 14px">Chưa có tài khoản? <a href="signup.php">Đăng ký</a> </p>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<!-- <script>

    var url = '@URL';

    // Đăng nhập
    function Login() {
        var phone = $('#txtPhone').val();
        var pass = $('#txtPass').val();
        if (phone.length == 0 || pass.length == 0) {
            alert("Phải nhập số điện thoại và mật khẩu!");
            return;
        }
        ShowLoad();
        var form = new FormData();
        form.append('phone', phone);
        form.append('pass', pass);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url + "/Unity/Login", true);
        xhr.timeout = 30000;
        xhr.ontimeout = function () {
            HideLoad();
            alert('Hệ thống tạm thời không khả dụng! Thử lại sau ít phút.');
        }
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var ms = JSON.parse(xhr.responseText);
                if (ms.status == "OK") {
                    window.location = '/';
                }
                else {
                    $('#MS').css('display','block');
                    HideLoad();
                }
            }
        }
        xhr.send(form);
    }
</script> -->

<!-- <script>

    var url = '@URL';

    // Đăng nhập
    function Login() {
        var phone = $('#txtPhone').val();
        var pass = $('#txtPass').val();
        if (phone.length == 0 || pass.length == 0) {
            alert("Phải nhập số điện thoại và mật khẩu!");
            return;
        }
        ShowLoad();
        var form = new FormData();
        form.append('phone', phone);
        form.append('pass', pass);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url + "/Unity/Login", true);
        xhr.timeout = 30000;
        xhr.ontimeout = function () {
            HideLoad();
            alert('Hệ thống tạm thời không khả dụng! Thử lại sau ít phút.');
        }
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var ms = JSON.parse(xhr.responseText);
                if (ms.status == "OK") {
                    window.location = '/';
                }
                else {
                    $('#MS').css('display','block');
                    HideLoad();
                }
            }
        }
        xhr.send(form);
    }
</script> -->