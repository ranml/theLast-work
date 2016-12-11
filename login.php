<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-box">
    <form action="doAction.php" method="post">
        <div class="input-text">
            <label for="username">用户名：</label>
            <input type="text" id="username" name="username" placeholder="请输入用户名">
        </div>
        <div class="input-text">
            <label for="password">密&nbsp;码：</label>
            <input type="password" id="password" name="password" placeholder="请输入密码">
        </div>
        <div class="input-text btn-sub">
            <input type="button" value="登录" id="login" />
        </div>
        <div>
            <h1  id="res"> </h1>
        </div>
    </form>
</div>

<script src="js/app.js"></script>
</body>
</html>