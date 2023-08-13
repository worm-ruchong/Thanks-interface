<!DOCTYPE html>
<html lang="zh" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>LAVA后台管理系统 |  LavaBucket 版权 © 所有</title>
    <link rel="stylesheet" href="./dashlite.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-wrap ">
        <div class="nk-content nk-content-lg nk-content-fluid">
            <div class="container-xl" id="app" style="text-align: center;">
                <div class="col-sm-12 col-md-10 col-xl-8 center-block">
                    <div class="card card-preview">
                        <form name=alipayment action=api.php method=post target="_blank">
                        <div class="card-inner mt-3">
                            <div class="nya-title nk-ibx-action-item progress-rating">
                                <span class="nk-menu-text font-weight-bold">LAVA后台管理系统</span>
                            </div>
<?php
$u = $_POST['username'];
$p = $_POST['password'];
//用户名和密码，使用MD5加密，我就不信能解开
$username = '21232f297a57a5a743894a0e4a801fc3';
$password = 'b2e8d1a257aecde626b204535676ce05';

//加密
$uhm = md5($u);
$mp = md5($p);

// 用户登录成功后，生成令牌
function generateToken($user_id) {
    // 生成一个随机的令牌字符串
    $token = bin2hex(random_bytes(32));

    // 将令牌与用户ID关联，并保存到数据库中或其他合适的存储位置

    // 将令牌保存到Cookie中
    setcookie('token', $token, time() + (86400 * 1), '/'); // 有效期为30天
}

if (!isset($u) or !isset($p)) {
    echo '<div class="alert alert-info">管理员名称或密码不能为空！</div>';
}elseif ($uhm==$username) {
    if ($mp==$password) {
        //登录成功 生成令牌 下次登录时检测
        generateToken("admin");
        echo '<div class="alert alert-info">登录成功！</div>';
        echo '<div class="form-group">
                                <button class="btn btn-dim btn-outline-primary btn-block btn-lg οnclick=javascript:jump()>登录后台</button></a>
                            </div>';
    }else {
        echo '<div class="alert alert-info">用户或密码错误！</div>';
    }
}else {
    echo '<div class="alert alert-info">用户或密码错误！</div>';
}
?>
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
    <script src="//cdn.staticfile.org/layer/3.5.1/layer.js"></script>
<!-- 判断信息 -->
<script>
    function jump(){
        layer.msg("正在重定向..", {icon: 1});
        window.location.href="https://web.sdapay.cn/admin/";
    }
</script>
</body>
</html>