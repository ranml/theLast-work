<?php
//获取ajax页面提交的数据
$username = $_POST["username"];
$password = $_POST["password"];

//echo "用户名是：".$username."密码是:".$password;

//数据库配置
$database = array(
   "servername"=>"localhost",
    "username"=>"root",
    "password"=>"",
    "db_name"=>"mm"
);

/**
 * Fun：连接数据库
 * @param $database 数据库的配置参数
 * @return resource
 */
function connect_db($database){
    return mysqli_connect($database["servername"],
                          $database["username"],
                          $database["password"],
                          $database["db_name"] );
}

//连接数据库
$con = connect_db($database);

//检查数据库是否连接成功
if(!$con){
    die("Could not connect:".mysqli_error());
}

//sql语句
$sql = "select * from user WHERE username=".$username." and password=".$password.";";

//执行SQL语句
$result = mysqli_query($con, $sql);

//判断是否查询到了结果
if($result){
    $rowCount = mysqli_num_rows($result);
    if($rowCount > 0){
        echo "1";
    }
    // 释放结果集
    mysqli_free_result($result);
}else{
    echo "0";
}

//关闭数据库连接
mysqli_close($con);
/*$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
while($row = mysqli_fetch_array($result))
{
    echo $row['username'] . " " . $row['password'];
    echo "<br />";
}*/
