<!DOCTYPE html>
<html lang="zh" class="js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>LAVA后台管理系统 |  LavaBucket 版权 © 所有</title>
    <link rel="stylesheet" href="./dashlite.css">
    <link rel="stylesheet" href="./style.css">
</head>
<?php
//导入配置文件
require_once("config.php");

// 定义和实现函数 isValidToken()
function isValidToken($token) {

    // 返回令牌的有效性结构
    return true; // 返回 true 表示令牌有效，返回 false 表示令牌无效
}

// 定义和实现函数 getUserIdByToken()
function getUserIdByToken($token) {
    // 获取与令牌关联的用户ID
    // ...

    // 返回用户ID
    return $user_id;
}

// 从Cookie中获取令牌
$token = $_COOKIE['token'];

// 检查令牌是否存在并有效
if (!empty($token) && isValidToken($token)) {
    // 令牌有效，自动登录用户
    $user_id = getUserIdByToken($token);

    // 可以选择跳转到用户的个人页面或其他逻辑
} else {
    // 令牌无效或不存在，跳转到登录页面或其他逻辑
    header('Location: /admin/login.php');
    exit();
}


//判断有没有接收到信息
if (!isset($xiuxiu)) {
    echo '<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-wrap ">
        <div class="nk-content nk-content-lg nk-content-fluid">
            <div class="container-xl" id="app" style="text-align: center;">
                <div class="col-sm-12 col-md-10 col-xl-8 center-block">
                    <div class="card card-preview">
                        <div class="card-inner mt-3">
                            <div class="nya-title nk-ibx-action-item progress-rating">
                                <span class="nk-menu-text font-weight-bold">LAVA后台管理系统</span>
                            </div>
                            <div class="alert alert-info"><h4>鸣谢</h4></div>';
                            foreach ($peopleData_1 as $person) {
                            echo '
                            <div class="list-group">
                            <div class="alert alert-info">' . $person['name'] . '</div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text">QQ账号</span></div>
                                        <input type="text" class="form-control" id="username" placeholder="QQ账号" v-model="desc" value="' . $person['accountNumber'] . '">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text">人员名称</span></div>
                                        <input type="text" class="form-control"  id="password" placeholder="人员名称" v-model="imei" value="' . $person['name'] . '">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text">人员介绍</span></div>
                                        <input type="text" class="form-control"  id="password" placeholder="人员介绍" v-model="imei" value="' . $person['text'] . '">
                                    </div>
                                </div>
                            </div>';
                            }
                            echo'
                            <div class="alert alert-info"><h4>赞助了我们</h4></div>
                            <br/>
                            ';
                            foreach ($peopleData_2 as $person) {
                            echo '
                            <div class="list-group">
                            <div class="alert alert-info">' . $person['name'] . '</div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text">QQ账号</span></div>
                                        <input type="text" class="form-control" id="username" placeholder="QQ账号" v-model="desc" value="' . $person['accountNumber'] . '">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text">人员名称</span></div>
                                        <input type="text" class="form-control"  id="password" placeholder="人员名称" v-model="imei" value="' . $person['name'] . '">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text">人员介绍</span></div>
                                        <input type="text" class="form-control"  id="password" placeholder="人员介绍" v-model="imei" value="' . $person['text'] . '">
                                    </div>
                                </div>
                            </div>';
                            }
                            echo '
                            <br/>
                            <div class="form-group">
                                <button class="btn btn-dim btn-outline-primary btn-block btn-lg">修改</button>
                            </div>
                            <div v-html="result" v-show="showresult"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content @d -->
        <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright"> &copy; 2023 LavaBucket开发和发布！ </div>
                </div>
            </div>
        </div>
        <!-- footer @e -->
    </div>
    <!-- wrap @e -->
    <script src="//cdn.staticfile.org/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.staticfile.org/bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.staticfile.org/layer/3.5.1/layer.js"></script>';
}
?>
<!-- 判断信息 -->
<script>
$(document).ready(function(){
  $("button").click(function(){
  layer.msg("修改中..", {icon: 1});
  });
});
</script>
<!--请求结束-->
</body>
</html>
