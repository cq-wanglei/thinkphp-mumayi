<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo ($data["gjc"]); ?></title>
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta http-equiv="Cache-Control" content="no-transform " />
        <meta name="Keywords" content="<?php echo ($data["gjc"]); ?>" />
        <meta name="description" content="<?php echo ($data["gjc"]); ?>" />
        <link rel="stylesheet" href="http://seo.android77.com/css/style.css" type="text/css" />
        <script type="text/javascript" src="http://ww.mumayi.com/jquery-1.8.3.min.js"></script>
    </head>
    
    <body>
        <div id="showhtmls"></div>
        <div>
            <div class="c_ay"><?php echo ($data["gjc"]); ?></div></div>
        <div class="w960 center mt1">
            <div class="m_h">
                <div class="m_h_h">
                    <span class="m_h_h_s">今日新增词条:<?php echo ($data["xinzeng"]); ?>条</span>
                    <div class="m_f_h_d">目前在线人数:<?php echo ($data["zaixian"]); ?>人</div></div>
            </div>
        </div>
        <div class="w960 center mt1">
            <fieldset>
                <legend>
                    <a href="/">首页</a></legend>
                <div>
                    <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <?php if(is_array($data["nav"])): $i = 0; $__LIST__ = $data["nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><b>
                                                                    <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/m?key=k_<?php echo (urlencode($vi["gjc"])); ?>" target="_blank"><?php echo ($vi["gjc"]); ?></a>
                                                                </b><?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul>
                                                    <li style="margin-bottom:8px;">
                                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/?seo" target="_blank">
                                                            <img src="http://imga.mumayi.com/android/img_mumayi/guang/2018/04/28/a_114638292500cf8f9de.png"></a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li style="margin-bottom:8px;">
                                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/bd/zcs/1033/w/?1" target="_blank">
                                                            <img src="http://imga.mumayi.com/android/img_mumayi/guang/2018/03/05/a_215910558f220109a91.jpg"></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <div></fieldset>
            </div>
            <div class="m"></div>
            <div class="m">
                <div class="c clearfix">
                    <div class="space" id="showleftad"></div>
                    <div class="le">
                        <div class="c_t">
                            <h1><?php echo ($data["gjc"]); ?></h1></div>
                        <div class="c_t"></div>
                        <div class="c_t_b"></div>
                        <div class="c_z">
                            <ul>
                                <?php if(is_array($data["ci"])): $i = 0; $__LIST__ = $data["ci"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo.['dj']) ?>
                                    <li>
                                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/m?key=k_<?php echo (urlencode($vo["ci"])); ?>" target="_blank">

                                            <font style="color: red;font-size:20px"><?php echo ($vo["ci"]); ?></font></a>
                                        <span style="font-size:12px">[词条点击次数:
                                            <font color="browse">
                                                <b><?php echo ($vo["dj"]); ?></b>
                                            </font>次]
                                            <a rel="nofollow" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/m?key=k_login.html" target="_blank" style="margin-left: 10px;font-size:12px">登陆查看详情</a>
                                        </span>
                                        <div class="c_z_d">关注人数:<?php echo ($vo["gz"]); ?>次&nbsp;&nbsp;&nbsp;&nbsp;拼音:[<?php echo ($vo["py"]); ?>]&nbsp;&nbsp;&nbsp;&nbsp;收录于:[
                                            <font color="orange"><?php echo ($vo["slsj"]); ?></font>]
                                            <br/>
                                        </div>
                                        <div class="c_z_d">附加广告:&nbsp;&nbsp;
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="space" id="showrightad"></div>
                </div>
            </div>
            </div>
        </div>
        <div class="w960 center mt1">
            <div class="m_h ">
                <div class="m_h_h">
                    <span class="m_h_h_s_friendlink">友情连接</span>
                    <div class="m_f_h_d">欢迎交换,要求百度权重≥1,快照正常</div></div>
            </div>
        </div>
        <div class="w960 center mt1">
            <div class="m_f_c">
                <ul></ul>
            </div>
        </div>
        <div class="w960 center mt1">
            <div class="m_f_c">
                <ul>
                    <?php if(is_array($data["youqing"])): $i = 0; $__LIST__ = $data["youqing"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><li>
                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/m?key=k_<?php echo (urlencode($vv["gjc"])); ?>" target="_blank"><?php echo ($vv["gjc"]); ?></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="m"></div>
        <div class="c_foot" id="footer">
            <div class="c_lj">
                <p>共用时：<?php echo G('begin','end',3); ?>秒 Copyright © Kylingood 版权所有</p>
            </div>
        </div>
        <script>
            (function() {

                /*百度推送代码*/
                var bp = document.createElement('script');
                var curProtocol = window.location.protocol.split(':')[0];
                if (curProtocol === 'https') {
                    bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
                }
                else {
                    bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);

                var canonicalURL, curProtocol;
                //Get the <link> tag
                var x=document.getElementsByTagName("link");
                //Find the last canonical URL
                if(x.length > 0){
                    for (i=0;i<x.length;i++){
                        if(x[i].rel.toLowerCase() == 'canonical' && x[i].href){
                            canonicalURL=x[i].href;
                        }
                    }
                }
                //Get protocol
                if (!canonicalURL){
                    curProtocol = window.location.protocol.split(':')[0];
                }
                else{
                    curProtocol = canonicalURL.split(':')[0];
                }
                //Get current URL if the canonical URL does not exist
                if (!canonicalURL) canonicalURL = window.location.href;
                //Assign script content. Replace current URL with the canonical URL
                !function(){var e=/([http|https]:\/\/[a-zA-Z0-9\_\.]+\.baidu\.com)/gi,r=canonicalURL,t=document.referrer;if(!e.test(r)){var n=(String(curProtocol).toLowerCase() === 'https')?"https://sp0.baidu.com/9_Q4simg2RQJ8t7jm9iCKT-xh_/s.gif":"//api.share.baidu.com/s.gif";t?(n+="?r="+encodeURIComponent(document.referrer),r&&(n+="&l="+r)):r&&(n+="?l="+r);var i=new Image;i.src=n}}(window);

                /*360推送代码*/
                var src = document.location.protocol + '//js.passport.qihucdn.com/11.0.1.js?8113138f123429f4e46184e7146e43d9';
                document.write('<script src="' + src + '" id="sozz"><\/script>');

                //提交获取的链接
                $('a').each(function(){
                    var href = $(this).attr('href');
                    if (href !== 'http://<?php echo $_SERVER['SERVER_NAME']; ?>/m?key=k_login.html') {
                        $.ajax({url:href,async:true});
                    }
                    console.log(href);
                });
            })();
        </script>
    </body>

</html>