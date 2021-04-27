<?php
//禁用错误报告
error_reporting(1);
$t=htmlspecialchars($_GET["t"]);
$q=htmlspecialchars($_POST["q"]);
if (empty($q)) {
}else{
  if ($t=="b"){
    echo'<script>window.location.href="https://www.google.com.hk/search?hl=zh&q='.$q.'";</script>';
  }else{
    //默认谷歌
    echo'<script>window.location.href="//www.baidu.com/s?ie=utf-8&word='.$q.'";</script>';
  }
};
?>
<!DOCTYPE html>
<html lang="zh-CN">
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <meta name="referrer" content="strict-origin-when-cross-origin">
  <meta name="theme-color" content="#ffffff">
  <link rel="icon" href="icon/192.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="icon/300.png" />
  <meta name="msapplication-TileImage" content="icon/300.png" />
  <link rel="shortcut icon" href="icon/32.png"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="full-screen" content="yes"><!--UC强制全屏-->
  <meta name="browsermode" content="application"><!--UC应用模式-->
  <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
  <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
  <title>简洁导航</title>
  <link href="./skin/style.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://at.alicdn.com/t/font_1230786_59ub5vczww4.js"></script>
  <script src="./skin/sou.js?t=<?php echo date("ymdhi"); ?>"></script>
  <script> var _hmt = _hmt || []; (function() {   var hm = document.createElement("script");   hm.src = "https://hm.baidu.com/hm.js?da57fbf8f79dfeb64d51b08644647f05";   var s = document.getElementsByTagName("script")[0];    s.parentNode.insertBefore(hm, s); })(); </script>

</head>

<body style=" overflow-y:auto;">
    <div id="menu"><i></i></div>
    <div class="list closed">
        <ul>
          <!------>
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-shipin"></use></svg> 视频媒体</li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youtube"></use>
</svg> Youtube</a></li>
            <li><a rel="nofollow" href="https://v.qq.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-tengxunshipin"></use></svg>腾讯视频</a></li>
            <li><a rel="nofollow" href="https://www.youku.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youku"></use></svg>优酷</a></li>
            <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-aiqiyi"></use></svg>爱奇艺</a></li>
            <li><a rel="nofollow" href="http://www.zmz2019.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-zimu"></use></svg>字幕组</a></li>
            <li><a rel="nofollow" href="http://www.acfun.cn/index.html" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-acfun"></use></svg>ACFUN</a></li>
            <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bili"></use></svg>哔哩哔哩</a></li>
            <li><a rel="nofollow" href="https://yingshi.ml" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yunbo"></use></svg>影视搜索</a></li>

          <!------>
             <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gouwuche"></use></svg> 购物</li>
            <li><a rel="nofollow" href="https://www.taobao.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-taobao"></use></svg>淘宝网</a></li>
            <li><a rel="nofollow" href="https://dyartstyle.com/juhuasuan/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-juhuasuan"></use></svg>聚划算</a></li>
            <li><a rel="nofollow" href="https://dyartstyle.com/temai/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-temai"></use></svg>淘宝特卖</a></li>
            <li><a rel="nofollow" href="https://mobile.yangkeduo.com/duo_cms_mall.html?pid=8742514_71211367&cpsSign=CM_190605_8742514_71211367_92fdd9f7fb637fec599bf556f263ed1f&duoduo_type=2&launch_wx=1" title="拼多多手机端专属商城，超低价商品火热抢购中，更有超多大额优惠券持续发放，一键立抢>>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-99"></use></svg>拼多多</a></li>
            <li><a rel="nofollow" href="https://www.jd.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jingdong"></use></svg>京东</a></li>
            <li><a rel="nofollow" href="https://www.suning.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-suning"></use></svg>苏宁易购</a></li>
            <li><a rel="nofollow" href="http://you.163.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yanxuan"></use></svg>网易严选</a></li>
            <li><a rel="nofollow" href="https://www.amazon.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-amazon"></use></svg>亚马逊</a></li>
            <li><a rel="nofollow" href="http://www.dangdang.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-dangdang"></use></svg>当当</a></li>
            <li><a rel="nofollow" href="https://wat.dyartstyle.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wat"></use></svg>吾爱淘</a></li>

          <!------> 
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-msg"></use></svg> 社交资讯</li>
            <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-weibo"></use></svg>微博</a></li>
            <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-zhihu"></use></svg>知乎</a></li>
            <li><a rel="nofollow" href="https://www.douban.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-douban"></use></svg>豆瓣</a></li>
            <li><a rel="nofollow" href="https://www.jianshu.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jianshu"></use></svg>简书</a></li>
            <li><a rel="nofollow" href="https://www.v2ex.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-v2ex"></use></svg>V2EX</a></li>
            <li><a rel="nofollow" href="https://www.instagram.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-instagram"></use></svg>Instagram</a></li>
            <li><a rel="nofollow" href="https://www.twitter.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-twitter"></use></svg>Twitter</a></li>
            <li><a rel="nofollow" href="https://www.facebook.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-facebook"></use></svg>Facebook</a></li>
          <!------>
           <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-ai-tool"></use></svg> 工具</li>
            <li><a rel="nofollow" href="/ip/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangluo"></use></svg>IP查询</a></li>
            <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-fanyi"></use></svg>谷歌翻译</a></li>
            <li><a rel="nofollow" href="https://feedly.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-feedly"></use></svg>Feedly</a></li>         
            <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-baiduyun"></use></svg>百度网盘</a></li>
            <li><a rel="nofollow" href="https://www.mdeditor.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-md"></use></svg>MD编辑器</a></li>
            
            <li><a rel="nofollow" href="/base64/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-base64"></use></svg>Base64</a></li>
            <li><a rel="nofollow" href="https://javascriptobfuscator.com/Javascript-Obfuscator.aspx" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jshunxiao"></use></svg>JS混淆器</a></li>
            <li><a rel="nofollow" href="https://ping.pe" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangluo1"></use></svg>Ping.pe</a></li>
            <li><a rel="nofollow" href="https://ping.chinaz.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-pingup"></use></svg>站长Ping</a></li>
            <li><a rel="nofollow" href="https://apkdl.in/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-anzhuo"></use></svg>APK下载</a></li>
            <!------>

            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youxiang"></use></svg> 邮箱</li>
            <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gmail"></use></svg>Gmail</a></li>
            <li><a rel="nofollow" href="https://login.microsoftonline.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-windows"></use></svg>office365</a></li>
            <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangyi"></use></svg>网易邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.sina.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-xinlangwang"></use></svg>新浪邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-QQ"></use></svg>QQ邮箱</a></li>
            <li><a rel="nofollow" href="https://qiye.aliyun.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yunyouxiang"></use></svg>阿里邮箱</a></li>
          <!------>
          
         
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sheji"></use></svg> 设计视觉</li>
            <li><a rel="nofollow" href="https://web.yyv.me/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-daohang1"></use></svg>设计导航</a></li>
            <li><a rel="nofollow" href="https://www.pinterest.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-pinterest"></use></svg>Pinterest</a></li>
            <li><a rel="nofollow" href="https://www.behance.net/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-behance"></use></svg>Behance</a></li>
            <li><a rel="nofollow" href="https://www.dribbble.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-dribbble"></use></svg>Dribbble</a></li>
            <li><a rel="nofollow" href="https://huaban.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-huaban"></use></svg>花瓣</a></li>
            <li><a rel="nofollow" href="https://www.zcool.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-zhanku"></use></svg>站酷</a></li>
            <li><a rel="nofollow" href="https://www.iconfont.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-iconfont"></use></svg>阿里图标</a></li>
            <li><a rel="nofollow" href="https://www.iconfinder.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-eye"></use></svg>IconFinder</a></li>
            <li><a rel="nofollow" href="https://uiiiuiii.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jiaocheng"></use></svg>优设教程</a></li>
          <!------>
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg> 搜索引擎</li>
            <li><a rel="nofollow" href="https://www.google.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-google"></use></svg>Google</a></li>
            <li><a rel="nofollow" href="https://duckduckgo.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-duck"></use></svg>DuckGo</a></li>
            <li><a rel="nofollow" href="https://www.bing.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bing"></use></svg>Bing</a></li>
            <li><a rel="nofollow" href="https:/m.baidu.com/?pu=sz%401321_480&wpo=btmfast" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-icon_baidulogo"></use></svg>百度</a></li>
            <li><a rel="nofollow" href="https://hk.yahoo.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yahoo"></use></svg>雅虎</a></li>
            <li><a rel="nofollow" href="https://www.sogou.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sougou"></use></svg>搜狗</a></li>
            <li><a rel="nofollow" href="https://www.naver.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-icon-test"></use></svg>NAVER</a></li>
            <li><a rel="nofollow" href="https://mijisou.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-miji"></use></svg>秘迹</a></li>
            <li><a rel="nofollow" href="https://www.dogedoge.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gougou"></use></svg>多吉</a></li>
            <li><a rel="nofollow" href="https://seeres.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg>seeres</a></li>
            <!------>
           
            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-kongzhitai"></use></svg> 开发</li>
            <li><a rel="nofollow" href="http://www.w3school.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-h5"></use></svg>W3school</a></li>
            <li><a rel="nofollow" href="https://github.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-github"></use></svg>Github</a></li>
            <li><a rel="nofollow" href="https://codepen.io/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-codepen"></use></svg>Codepen</a></li>
            <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-theater-masks"></use></svg>吾爱破解</a></li>
            <li><a rel="nofollow" href="https://segmentfault.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-msg"></use></svg>SF思否</a></li>
            <li><a rel="nofollow" href="https://cdnjs.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-cdnjs"></use></svg>CdnJs</a></li>
            <li><a rel="nofollow" href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-font-awesome"></use></svg>Font A.</a></li>
            <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-windows"></use></svg>MSDN下载</a></li>
            <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-cloudflare"></use></svg>C. flare</a></li>
            <li><a rel="nofollow" href="https://www.swiper.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-S"></use></svg>Swiper</a></li>
        </ul>
    </div>

    <div class="mywth" style="width: 120px;margin-top: 3px;">
       <div id="he-plugin-simple"></div>
        <script>
        WIDGET = {
          CONFIG: {
            "modules": "01234",
            "background": 5,
            "tmpColor": "4A4A4A",
            "tmpSize": "12",
            "cityColor": "4A4A4A",
            "citySize": "12",
            "aqiSize": "12",
            "weatherIconSize": "16",
            "alertIconSize": "14",
            "padding": "0px 5px 0px 5px",
            "shadow": "1",
            "language": "auto",
            "fixed": "false",
            "vertical": "middle",
            "horizontal": "left",
            "key": "43411edac1b64ec7bc4d2f1ad8e6d5b7"
          }
        }
        </script>
        <script src="https://widget.heweather.net/simple/static/js/he-simple-common.js?v=2.0"></script>
        
    </div>  
   
    <div id="content">
        <div class="con">
            <div class="shlogo" ></div>
            <div class="sou">
                <form action="" method="post" target="_blank">
                   <?php 
                   if ($t=="b"){
                     echo'<div class="lg" style="background: url(icon/g.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=\';"></div>';
                   }else{
                    //默认谷歌图标
                     echo'<div class="lg" style="background: url(icon/baidu.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=b\';"></div>';
                   }

                    ?>
                    <!--input class="t" type="text" value="" name="t" hidden-->
                    <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN" autocomplete="off">
                    <button><svg class="icon" style=" width: 21px; height: 21px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg></button>
                </form>
                <div id="word"></div>
                 
    <div  class="others">
        <a  href="https://account.aliyun.com/login/login.htm" target="_blank" class="fl">
            <img  src="./img/ali.png" style=""></a>
        <a  href="https://console.cloud.tencent.com" target="_blank" class="fl">
            <img  src="./img/tc.png"></a>
        <a  href="https://mp.weixin.qq.com/" target="_blank" class="fl">
            <img  src="./img/mp.png" ></a>
        <a  href="https://msdn.itellyou.cn/" target="_blank" class="fl">
            <img  src="./img/ity.jpg"></a>
        <a  href="https://account.aliyun.com/login/login.htm" target="_blank" class="fl">
            <img  src="/images/logo_003.png" ></a>
        <a  href="https://console.cloud.tencent.com" target="_blank" class="fl">
            <img  src="/images/logo_004.png" ></a>
        <a  href="https://mp.weixin.qq.com/" target="_blank" class="fl">
            <img  src="/images/logo_004d.png" ></a>
        <a  href="https://pan.baidu.com/" target="_blank" class="fl">
            <img  src="/images/bdwp.png" ></a>
        
          </div>
      </div>
          
    <br> <br>
      
        <div class="foot">© 2016-<?php echo date("Y") ?> by <a href="http://www.cloudlion.net/">云狮网络科技</a> . All rights reserved.</div>
        <br>
        </div>

              </div>
    </div> 

</body>
</html>