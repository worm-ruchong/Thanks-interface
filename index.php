<?php
  //获取GET请求
  $Pages = $_GET['id'];
  
  //导入配置文件
  require_once("./admin/config.php");
  
  /**
 * 发送post请求
 * @param string $url 请求地址
 * @param array $post_data post键值对数据
 * @return string
 */
function send_post($url, $post_data) { 
  $postdata = http_build_query($post_data);
  $options = array(
    'http' => array(
      'method' => 'POST',
     'header' => 'Content-type:application/x-www-form-urlencoded',
     'content' => $postdata,
      'timeout' => 15 * 60 // 超时时间（单位:s）
    )
  );
  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  return $result;
}  
?>
<!-- HTML+CSS，但是PHP -->
<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<script src="./js/layer.js"></script>
	
<head>
    <?php
    //这里是标题
    if (!isset($Pages) or $Pages=='0') {
        echo "<title>鸣谢</title>\n";
    } elseif ($Pages=='1') {
        echo "<title>赞助了我们</title>\n";
    } elseif ($Pages=='2') {
        echo "<title>群里有趣的事</title>\n";
    } elseif ($Pages=='3') {
        echo "<title>我们不欢迎他(她)们</title>\n";
    } elseif (strpos($Pages,'cooperate') !== false) {
        echo "<title>合作信息</title>\n";
    }
    else {
        echo "<title>参数错误！请联系网站管理员！</title>\n";
    }
    ?>
      <style>@import url(style.css);Disallow@import@import prevents parallel downloads,use<link>instead.@import url(style.css);</style>
      <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?d4825dc4eb6ecafe069ec8cf0ab450cf";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body oncontextmenu=self.event.returnValue=false onselectstart="return false">
    <?php
    if (!isset($Pages) or $Pages=='0') {
        echo '<h1>鸣谢</h1>';
        echo '<div class="container">';
                // 这里是输出HTML的，使用QQ自带的API，放在哪里都可以显示头像
                foreach ($peopleData_1 as $person) {
                    echo '<div class="contributor">';
                    echo '<img class="avatar" src="http://q1.qlogo.cn/g?b=qq&nk=' . $person['accountNumber'] . '&s=640" width="55" height="55">';
                    echo '<h3>' . $person['name'] . '</h3>';
                    echo '<p>' . $person['text'] . '</p>';
                    echo '<p class="signature"><span>远风云计算·为白嫖而生</span></p>';
                    echo '</div>';
                };
        }
        elseif ($Pages=='1')
        {
        echo '<h1>赞助了我们</h1>';
        echo '<div class="container">';
        // 这里是输出HTML的，使用QQ自带的API，放在哪里都可以显示头像
        foreach ($peopleData_2 as $person) {
            echo '<div class="contributor">';
            echo '<img class="avatar" src="http://q1.qlogo.cn/g?b=qq&nk=' . $person['accountNumber'] . '&s=640" width="55" height="55">';
            echo '<h3>' . $person['name'] . '</h3>';
            echo '<p>' . $person['text'] . '</p>';
            echo '<p class="signature"><span>远风云计算·为白嫖而生</span></p>';
            echo '</div>';
        }
    } elseif ($Pages=='2')
    {
        echo '<h1>群里有趣的事</h1>';
        echo '<div class="container">';
        // 这里是输出HTML的，使用QQ自带的API，放在哪里都可以显示头像
        foreach ($peopleData_3 as $person) {
            echo '<div class="contributor">';
            echo '<img class="avatar" src="http://q1.qlogo.cn/g?b=qq&nk=' . $person['accountNumber'] . '&s=640" width="55" height="55">';
            echo '<h3>' . $person['name'] . '</h3>';
            echo '<p>' . $person['text'] . '</p>';
            echo '<p class="signature"><span>远风云计算·为白嫖而生</span></p>';
            echo '</div>';
        }
    } elseif ($Pages=='3')
    {
        echo '<h1>我们不欢迎他(她)们</h1>';
        echo '<div class="container">';
        // 这里是输出HTML的，使用QQ自带的API，放在哪里都可以显示头像
        foreach ($peopleData_4 as $person) {
            echo '<div class="contributor">';
            echo '<img class="avatar" src="http://q1.qlogo.cn/g?b=qq&nk=' . $person['accountNumber'] . '&s=640" width="55" height="55">';
            echo '<h3>' . $person['name'] . '</h3>';
            echo '<p>' . $person['text'] . '</p>';
            echo '<p class="signature"><span>远风云计算·为白嫖而生</span></p>';
            echo '</div>';
        }
    } elseif ($Pages=='cooperate-tenyun-x-tc1t') {
        echo '<p>哈哈，其实没有合作，只是有好友，你还真信了</p>';
    }
    else {
        echo '<h1>参数错误！请联系网站管理员！</h1>';
    }
    echo '</div>';
    //底部显示
    if (!isset($Pages) or $Pages=='0' or $Pages=='1' or $Pages=='2' or $Pages=='3') {
        echo '<h1><p class="signature"><span><a href="./?id=cooperate-tenyun-x-tc1t" title="查看合作信息..">远风云计算 x TC1T工作室</a><br/><br/>';
        echo '您的IP：' . $_SERVER['REMOTE_ADDR'] . '<br/>';
        echo '(头像不正确是站长不知道QQ号，自动检索QQ群同名，默认使用10001账号头像)';
        echo '<br/>此网站由TC1T工作室运营</span></p></h1>';
    }
    
    //翻页
    if (!isset($Pages) or $Pages=='0') {
        echo "<ul class='pagination'>\n";
    	echo "  <li><a href='./'>«</a></li>\n";
    	echo "  <li><a class='active' href='./?id=0'>1</a></li>\n";
        echo "  <li><a href='./?id=1'>2</a></li>\n";
    	echo "  <li><a href='./?id=2'>3</a></li>\n";
    	echo "  <li><a href='./?id=3'>4</a></li>\n";
    	echo "  <li><a href='./?id=1'>»</a></li>\n";
    	echo "</ul>\n";
    } elseif ($Pages=='1') {
        echo "<ul class='pagination'>\n";
    	echo "  <li><a href='./'><button>«</button></a></li>\n";
    	echo "  <li><a href='./?id=0'>1</a></li>\n";
        echo "  <li><a class='active' href='./?id=1'>2</a></li>\n";
    	echo "  <li><a href='./?id=2'>3</a></li>\n";
    	echo "  <li><a href='./?id=3'>4</a></li>\n";
    	echo "  <li><a href='./?id=2'>»</a></li>\n";
    	echo "</ul>\n";
    } elseif ($Pages=='2') {
        echo "<ul class='pagination'>\n";
    	echo "  <li><a href='./?id=1'>«</a></li>\n";
    	echo "  <li><a href='./?id=0'>1</a></li>\n";
        echo "  <li><a href='./?id=1'>2</a></li>\n";
    	echo "  <li><a class='active' href='./?id=2'>3</a></li>\n";
    	echo "  <li><a href='./?id=3'>4</a></li>\n";
    	echo "  <li><a href='./?id=3'>»</a></li>\n";
    	echo "</ul>\n";
    } elseif ($Pages=='3') {
        echo "<ul class='pagination'>\n";
    	echo "  <li><a href='./?id=2'>«</a></li>\n";
    	echo "  <li><a href='./?id=0'>1</a></li>\n";
        echo "  <li><a href='./?id=1'>2</a></li>\n";
    	echo "  <li><a href='./?id=2'>3</a></li>\n";
    	echo "  <li><a class='active' href='./?id=3'>4</a></li>\n";
    	echo "  <li><a href='./?id=3'>»</a></li>\n";
    	echo "</ul>\n";
    } else {
        echo '';
    }
    ?>
</body>
</html>