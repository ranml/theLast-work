var username, password, login, res;

username = document.getElementById("username");
password = document.getElementById("password");
login = document.getElementById("login");
res = document.getElementById("res");



var xhr = new XMLHttpRequest();

xhr.open("POST", "doAction.php", true);
//添加 HTTP 头
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//获取服务器的响应
xhr.onreadystatechange = function(){
    var XMLHttpReq = xhr;
    if (XMLHttpReq.readyState == 4) {
        if (XMLHttpReq.status == 200) {
            var text = XMLHttpReq.responseText;
            if(text == "0"){
                alert("用户名或密码错误！");
            }else{
                alert("登录成功");
            }
        }
    }
};
function virify(){
    var flag = true;
    if(username.value == ""){
        flag = false;
    }
    if(password.value == ""){
        flag = false;
    }
    return flag;
}
login.onclick = function(){
    if(virify()){
        postData = "username="+username.value+"&"+"password="+password.value;
        xhr.send(postData);
        res.innerHTML = "";
    }else{
        res.innerHTML = "<span style='color: #f00'>请输入用户名或密码</span>";
    }
}