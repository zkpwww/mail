<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:73:"F:\work_else\mail\blogs\public/../application/index\view\index\index.html";i:1578564096;s:72:"F:\work_else\mail\blogs\application\index\view\layout\index_default.html";i:1578471263;s:63:"F:\work_else\mail\blogs\application\index\view\common\meta.html";i:1578470972;s:66:"F:\work_else\mail\blogs\application\index\view\common\sidenav.html";i:1578555158;s:65:"F:\work_else\mail\blogs\application\index\view\common\script.html";i:1578471186;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?> – <?php echo __('99羊毛'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<?php if(isset($keywords)): ?>
<meta name="keywords" content="<?php echo $keywords; ?>">
<?php else: ?>
<meta name="keywords" content="99羊毛社区">
<?php endif; if(isset($description)): ?>
<meta name="description" content="<?php echo $description; ?>">
<?php else: ?>
<meta name="description" content="99羊毛网提供最新最好的褥羊毛博客信息，让大家能在空闲时间多赚一些外快">
<?php endif; ?>




<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>
    <link rel="stylesheet" href="/assets/pc/plugin/layui/css/layui.css">
    <link rel="stylesheet" href="/assets/pc/css/global.css">
</head>

<body>

<div class="fly-header layui-bg-black">
    <div class="layui-container">

        <!--logo-->
        <a class="fly-name" href="index.html" style="" title="首页">
            <i class="layui-icon">&#xe68e;</i><img src="/assets/pc/images/logo.png">
        </a>

        <!--重要链接-->
        <ul class="layui-nav fly-nav layui-hide-xs">
            <li class="layui-nav-item layui-this">
                <a href="#"><i class="iconfont icon-renzheng"></i>加群</a>
            </li>
            <li class="layui-nav-item layui-this">
                <a href="#"><i class="iconfont icon-renzheng"></i>广告洽谈</a>
            </li>
        </ul>

        <!--登录窗口-->
        <ul class="layui-nav fly-nav-user">

            <!-- 未登录的状态 -->
            <li class="layui-nav-item">
                <a class="iconfont icon-touxiang layui-hide-xs" href="user/login.html"></a>
            </li>
            <li class="layui-nav-item">
                <a href="index/user/login">登录</a>
            </li>
            <li class="layui-nav-item">
                <a href="index/user/register">注册</a>
            </li>
            <li class="layui-nav-item layui-hide-xs">
                <a title="QQ登录" class="iconfont icon-qq"></a>
            </li>

            <!-- 登录后的状态 -->
            <!--
             <li class="layui-nav-item">
              <a class="fly-nav-avatar" href="javascript:;">
                <cite class="layui-hide-xs">贤心</cite>
                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg">
              </a>
              <dl class="layui-nav-child">
                <dd><a href="user/set.html"><i class="layui-icon">&#xe620;</i>基本设置</a></dd>
                <dd><a href="user/collect.html"><i class="iconfont icon-tongzhi" style="top: 4px;"></i>我的收藏</a></dd>
                <hr style="margin: 5px 0;">
                <dd><a href="index.html" style="text-align: center;">退出</a></dd>
              </dl>
            </li>-->

        </ul>
    </div>
</div>

<main class="content">
    
<div class="fly-panel fly-column">
    <div class="layui-container">

        <!--nav主体-->
        <ul class="layui-clear">
            <li class="layui-hide-xs layui-this"><a href="#">首页</a></li>
            <?php if(is_array($categoryList) || $categoryList instanceof \think\Collection || $categoryList instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><a href="index/index?category_id=<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <li class="layui-hide-xs layui-hide-sm layui-show-md-inline-block"><span class="fly-mid"></span></li>
            <li class="layui-hide-xs layui-hide-sm layui-show-md-inline-block"><a href="user/collect.html">我收藏的贴</a>
            </li>
        </ul>

        <!--搜索-->
        <div class="fly-column-right layui-hide-xs">
            <span class="fly-search"><i class="layui-icon"></i></span>
        </div>

    </div>
</div>


<!--body-->
<div class="layui-container">

    <div class="layui-row layui-col-space15">

        <!--左边-->
        <div class="layui-col-md8">

            <!--轮播图-->
            <div class="fly-panel layui-hide-xs">
                <div class="layui-row fly-panel-main">
                    <div class="layui-carousel fly-banner" id="topBanner">
                        <div carousel-item>
                            <?php if(is_array($slideList) || $slideList instanceof \think\Collection || $slideList instanceof \think\Paginator): $i = 0; $__LIST__ = $slideList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <a href="<?php echo url($vo['link_url']); ?>">
                                    <img src="<?php echo $vo['url']; ?>" alt="qyyt">
                                </a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--文章内容-->
            <div class="fly-panel">

                <!--文章筛选-->
                <div class="fly-panel-title fly-filter">
                    <a href="" class="layui-this">按最新</a>
                    <span class="fly-mid"></span>
                    <a href="">按最热</a>
                </div>

                <!--文章主体-->
                <ul class="fly-list">
                    <?php if(is_array($articleList) || $articleList instanceof \think\Collection || $articleList instanceof \think\Paginator): $i = 0; $__LIST__ = $articleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo url('article/detail',['id' => $vo['id']]); ?>">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span><?php echo $vo['title']; ?></span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black"><?php echo $vo['admin']['username']; ?></span>
                                <span><?php echo $vo['createtime']; ?></span>
                                <span class="fly-list-nums"><?php echo $vo['virtual_view'] + $vo['actual_view']; ?></span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

                <!--加载更多-->
                <div class="fly-center">
                    <div class="laypage-main">
                        <a href="sub/news.html" class="laypage-next">加载更多</a>
                    </div>
                </div>
            </div>

        </div>

        <!--右边-->
        <div class="layui-col-md4">

            <!--重点项目-->
            <div class="fly-panel">
                <h3 class="fly-panel-title">重点推荐</h3>
                <ul class="fly-panel-main fly-list-static">
                    <?php if(is_array($recommendList) || $recommendList instanceof \think\Collection || $recommendList instanceof \think\Paginator): $i = 0; $__LIST__ = $recommendList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="#"><?php echo $vo['title']; ?></a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

            <!--广告-->
            <div class="fly-panel">
                <div class="fly-panel-title">
                    赞助商
                    <span class="fly-mid"></span>
                    <a href="" class="fly-link fly-joinad">我要加入</a>
                </div>

                <div class="fly-panel-main">

                    <!--没有广告的时候显示这个，有则隐藏-->
                    <a href="#" class="fly-zanzhu fly-ad-rg">
                        广告位
                    </a>

                    <!--广告位实际图片-->
                    <a href="">
                        <img src="/assets/pc/images/test/banner.jpg" class="fly-ad-img" />
                    </a>

                </div>
            </div>

            <!--热门软件-->
            <div class="fly-panel fly-rank fly-rank-reply">
                <h3 class="fly-panel-title fly-clear">
                    <span class="fly-left">热门软件</span>
                    <a href="sub/software.html" class="fly-right">更多</a>
                </h3>
                <dl>
                    <?php if(is_array($softwareList) || $softwareList instanceof \think\Collection || $softwareList instanceof \think\Paginator): $i = 0; $__LIST__ = $softwareList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <dd>
                            <a href='#'>
                                <img src="<?php echo $vo['url']; ?>"><i><?php echo $vo['name']; ?></i>
                            </a>
                        </dd>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </dl>
            </div>

            <!--友情链接-->
            <div class="fly-panel fly-link">
                <h3 class="fly-panel-title">友情链接</h3>
                <dl class="fly-panel-main">
                    <?php if(is_array($linkList) || $linkList instanceof \think\Collection || $linkList instanceof \think\Paginator): $i = 0; $__LIST__ = $linkList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                     <dd><a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['name']; ?></a></dd>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <dd><a href="#" class="fly-link">申请友链</a></dd>
                </dl>
            </div>

            <!--加入qq粉丝群-->
            <div class="fly-panel fly-us-code" style="">
                <img src="/assets/pc/images/test/pay.jpg" alt="99羊毛">
                <p>QQ 扫码加入 99羊毛官方群</p>
            </div>

        </div>

    </div>

</div>



</main>
<!--回到顶部-->
<ul class="layui-fixbar">
    <li class="layui-icon layui-fixbar-top fly-go-top layui-hide-xs" style="display: block"></li>
    <li class="layui-icon fly-go-back layui-show-xs-block layui-hide" style="display: block">
        <i class="layui-icon layui-icon-return fly-go-back-icon"></i>
    </li>
</ul>

<div class="fly-footer">
    <p>
        <a href="https://www.99yangmao.com/">
            99羊毛社区
        </a>
        2019 &copy;
        <a href="https://www.99yangmao.com/">
            99yangmao.com 出品
        </a>
    </p>
</div>

<script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
<script src="/assets/pc/plugin/layui/layui.js"></script>
<script src="/assets/pc/js/common.js"></script>

</body>

</html>