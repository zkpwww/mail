<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"F:\work_else\mail\blogs\public/../application/index\view\index\index.html";i:1576834804;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>99羊毛</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="99羊毛社区">
    <meta name="description" content="99羊毛网提供最新最好的褥羊毛博客信息，让大家能在空闲时间多赚一些外快">
    <link rel="stylesheet" href="/assets/pc/plugin/layui/css/layui.css">
    <link rel="stylesheet" href="/assets/pc/css/global.css">
</head>
<body>

<!--logo-->
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

<!--nav-->
<div class="fly-panel fly-column">
    <div class="layui-container">

        <!--nav主体-->
        <ul class="layui-clear">
            <li class="layui-hide-xs layui-this"><a href="#">首页</a></li>
            <li><a href="sub/news.html">羊毛线报</a></li>
            <li><a href="sub/news.html">热点好项目</a></li>
            <li><a href="sub/news.html">长期项目</a></li>
            <li><a href="sub/news.html">区块链技术</a></li>
            <li><a href="sub/news.html">提现展示</a></li>
            <li><a href="sub/news.html">防骗指南</a></li>
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
                            <a href="#">
                                <img src="/assets/pc/images/test/banner.jpg" alt="qyyt">
                            </a>
                            <a href="#">
                                <img src="/assets/pc/images/test/banner.png" alt="qyyt">
                            </a>
                            <a href="#">
                                <img src="/assets/pc/images/test/banner.jpg" alt="qyyt">
                            </a>
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
                    <li>
                        <a href="./sub/detail.html">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span>淘果儿送的果树值钱吗？淘果儿怎么玩？</span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black">流星</span>
                                <span>刚刚</span>
                                <span class="fly-list-nums">浏览次数 66</span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./sub/detail.html">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span>淘果儿送的果树值钱吗？淘果儿怎么玩？</span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black">流星</span>
                                <span>刚刚</span>
                                <span class="fly-list-nums">浏览次数 66</span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./sub/detail.html">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span>淘果儿送的果树值钱吗？淘果儿怎么玩？</span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black">流星</span>
                                <span>刚刚</span>
                                <span class="fly-list-nums">浏览次数 66</span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./sub/detail.html">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span>淘果儿送的果树值钱吗？淘果儿怎么玩？</span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black">流星</span>
                                <span>刚刚</span>
                                <span class="fly-list-nums">浏览次数 66</span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./sub/detail.html">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span>淘果儿送的果树值钱吗？淘果儿怎么玩？</span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black">流星</span>
                                <span>刚刚</span>
                                <span class="fly-list-nums">浏览次数 66</span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./sub/detail.html">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span>淘果儿送的果树值钱吗？淘果儿怎么玩？</span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black">流星</span>
                                <span>刚刚</span>
                                <span class="fly-list-nums">浏览次数 66</span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./sub/detail.html">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span>淘果儿送的果树值钱吗？淘果儿怎么玩？</span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black">流星</span>
                                <span>刚刚</span>
                                <span class="fly-list-nums">浏览次数 66</span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./sub/detail.html">
                            <div class="fly-avatar">
                                <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" alt="贤心">
                            </div>
                            <h2>
                                <span class="layui-badge">原创</span>
                                <span>淘果儿送的果树值钱吗？淘果儿怎么玩？</span>
                            </h2>
                            <div class="fly-list-info">
                                <span class="fly-black">流星</span>
                                <span>刚刚</span>
                                <span class="fly-list-nums">浏览次数 66</span>
                            </div>
                            <div class="fly-list-badge">
                                <span class="layui-badge layui-bg-red">精帖</span>
                            </div>
                        </a>
                    </li>
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
                    <li>
                        <a href="#">layui 的 GitHub 及 Gitee (码云) 仓库，欢迎Star</a>
                    </li>
                    <li>
                        <a href="http://fly.layui.com/jie/5366/">
                            layui 常见问题的处理和实用干货集锦
                        </a>
                    </li>
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
                    <dd>
                        <a href="sub/software.html">
                            <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><i>趣头条</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="sub/software.html">
                            <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><i>趣头条</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="sub/software.html">
                            <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><i>趣头条</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="sub/software.html">
                            <img src="https://tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg"><i>趣头条</i>
                        </a>
                    </dd>
                </dl>
            </div>

            <!--友情链接-->
            <div class="fly-panel fly-link">
                <h3 class="fly-panel-title">友情链接</h3>
                <dl class="fly-panel-main">
                    <dd><a href="#">layui</a></dd>
                    <dd><a href="#">护肤网</a></dd>
                    <dd><a href="#">水果网</a></dd>
                    <dd><a href="#">淘宝</a></dd>
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

<!--回到顶部-->
<ul class="layui-fixbar">
    <li class="layui-icon layui-fixbar-top fly-go-top layui-hide-xs" style="display: block"></li>
    <li class="layui-icon fly-go-back layui-show-xs-block layui-hide" style="display: block">
        <i class="layui-icon layui-icon-return fly-go-back-icon"></i>
    </li>
</ul>

<!--footer-->
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

<script src="/assets/pc/plugin/layui/layui.js"></script>
<script src="/assets/pc/js/common.js"></script>

</body>
</html>