<?php
// 初始密码是 1x3x5x7
$xiuxiu = $_GET['x'];


?>
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
                        <!-- 这里的from最后可以添加target="_blank" -->
                        <form action=login-go.php method=post>
                        <div class="card-inner mt-3">
                            <div class="nya-title nk-ibx-action-item progress-rating">
                                <span class="nk-menu-text font-weight-bold">LAVA后台管理系统</span>
                            </div>
                            <div class="alert alert-info">请输入账号和密码登录系统后台（by LavaBucket）</div>
                            <div class="list-group">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text">账号</span></div>
                                        <input type="text" class="form-control" id="username" placeholder="账号" v-model="desc" name='username'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend"><span class="input-group-text">密码</span></div>
                                        <input type="password" class="form-control"  id="password" placeholder="密码" v-model="imei" name='password'>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <button class="btn btn-dim btn-outline-primary btn-block btn-lg"  type="submit">登录</button>
                            </div>
                            <div v-html="result" v-show="showresult"></div>
                        </div>
                        </form>
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
</body>
</html>