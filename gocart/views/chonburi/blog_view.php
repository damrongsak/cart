
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?= $title ?></title>

        <meta name="title" content="สโมสรฟุตบอลชลบุรีเอฟซี CHONBURI FOOTBALL CLUB สโมสรฟุตบอล ชลบุรีเอฟซี" />
        <meta name="description" content="สโมสรฟุตบอลชลบุรีเอฟซี CHONBURI FOOTBALL CLUB สโมสรฟุตบอล ชลบุรีเอฟซี สโมสรชลบุรีfc ชลบุรีเอฟซี ฉลามชล" />
        <meta name="keywords" content="สโมสรฟุตบอลชลบุรีเอฟซี, CHONBURI FOOTBALL CLUB ,สโมสรฟุตบอล ชลบุรีเอฟซี, สโมสรชลบุรีfc, ชลบุรีเอฟซี, ฉลามชล" />
        <meta name="language" content="th" />
        <meta name="robots" content="index,follow" />
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" />
        <meta name="stats-in-th" content="4a61" />
        <link rel="shortcut icon" href="http://www.chonburifootballclub.com/public/img/favicon.ico" />

        <!--77-->
        <link  href="http://www.chonburifootballclub.com/plugins/topsubmenu/chrometheme/chromestyle.css" rel="stylesheet" type="text/css" />	  
        <script type='text/javascript' src='http://www.chonburifootballclub.com/plugins/topsubmenu/chromejs/chrome.js'></script>

        <!-- CSS -->
        <link  href="http://www.chonburifootballclub.com/public/css/layout.css" rel="stylesheet" type="text/css" />	<link  href="http://www.chonburifootballclub.com/public/css/template.css" rel="stylesheet" type="text/css" />	<link  href="http://www.chonburifootballclub.com/public/css/fontset.css" rel="stylesheet" type="text/css" />	<!-- EMBED FONT CSS -->
        <link  href="http://www.chonburifootballclub.com/public/css/embedfont/stylesheet.css" rel="stylesheet" type="text/css" />	<!-- FAVICON-->
        <link rel="shortcut icon" href="http://www.chonburifootballclub.com/public/img/booklogo.ico" />

        <!-- Core jQuery -->
        <script type='text/javascript' src='http://www.chonburifootballclub.com/public/js/jquery-1.4.2.min.js'></script>

        <!-- Fade Image -->
        <link rel="stylesheet" href="http://www.chonburifootballclub.com/public/css/fade.image.css" type="text/css" media="screen" title="no title" charset="utf-8" />
        <!--[if IE 8]>
        <link rel="stylesheet" href="http://www.chonburifootballclub.com/public/css/fade.image.ie8.css" type="text/css" media="screen" title="no title" charset="utf-8" />
        <![endif]-->	


        <!-- Register -->
        <link rel="stylesheet" href="http://www.chonburifootballclub.com/plugins/jQuery-Validation/css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
        <link rel="stylesheet" href="http://www.chonburifootballclub.com/plugins/jQuery-Validation/css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />
        <script src="http://www.chonburifootballclub.com/plugins/jQuery-Validation/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="http://www.chonburifootballclub.com/plugins/jQuery-Validation/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>


        <!-- Popup LightBox -->
        <script type="text/javascript" src="http://www.chonburifootballclub.com/plugins/fancy132/fancybox/jquery.fancybox-1.3.2.js"></script> 
        <link rel="stylesheet" type="text/css" href="http://www.chonburifootballclub.com/plugins/fancy132/fancybox/jquery.fancybox-1.3.2.css" media="screen" /> 


        <!-- Google Analytics -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-2433997-30']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

        <!---- tab --->
        <script type='text/javascript' src='http://www.chonburifootballclub.com/public/js/jquery.js'></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".tab_content").hide();
                $(".tab_content:first").show(); 
                $("ul.tabs li").click(function() {
                    $("ul.tabs li").removeClass("active");
                    $(this).addClass("active");
                    $(".tab_content").hide();
                    var activeTab = $(this).attr("rel"); 
                    $("#"+activeTab).fadeIn(); 
                });
            });
        </script> 
    </head>

    <body class="body" id="body">
        <div id="main">
            <div id="top">
                <p align="right" >&nbsp;
                </p>
                <a href="#" title="หนังสือนิยาย" >
                    <img src="http://www.chonburifootballclub.com/public/img/adtbanner/c0d97c7820fe5562a914d40655a65e87.jpg" width="1000" height="142" alt="Second Image"style="border:1px solid #DEDCDC;"/>
                </a>
            </div>
            <div id="topmenu">
                <div class="chromestyle" id="chromemenu">
                    <ul>
                        <li ><a href="index.php/blog/home/" title="หน้าแรก HOME" class='selected'><b>หน้าแรก </b></a></li>
                        <li ><a href="index.php/blog/news/" title="up to date" ><b>up to date</b></a></li>
                        <li ><a href="index.php/blog/scoop/" title="สกู๊ป SCOOP" rel="dropmenu1" ><b>ร้านหนังสือ</b></a></li>
                        <li ><a href="index.php/blog/fixture/" title="FIXTURES" ><b>อ่านหนังสือ</b></a></li>
                        <li ><a href="index.php/blog/contactus/" title="ติดต่อ CONTACT US" ><b>ติดต่อ</b></a></li>
                        <li><a href="http://www.chonburifootballclub.com/webboard/" target="_blank" title="เว็บบอร์ด WEBBOARD"><b>เว็บบอร์ด</b></a></li>
                    </ul>
                </div>

                <!--1st drop down menu -->                                                   
                <div id="dropmenu1" class="dropmenudiv">
                    <a href="index.php/blog/scoop/">โรมานซ์</a>
                    <a href="index.php/blog/clipvdo/">สการ์เล็ต</a>
                    <a href="index.php/blog/interview/">ไทนี่</a>
                    <a href="index.php/blog/commentary/">Flower of love</a>
                    <a href="http://www.livestream.com/chonburi_fc" target="_blank">มิราจ</a>
                    <a href="index.php/blog/advertising/">ทั่วไป</a>
                </div>

                <div id="dropmenu2" class="dropmenudiv">
                    <a href="http://chonburifc.weloveticket.com/"  target="_blank">ซื้อตั๋วออนไลน์</a>
                    <a href="http://chonburifcstore.welovebooking.net" target="_blank">ซื้อสินค้าสโมสร</a>
                    </a>
                </div>

                <script type="text/javascript">
                    cssdropdown.startchrome("chromemenu")
                </script>
            </div>
            <!--content_start-->
            <div id="content">
                <div id="left">
                    <link rel="stylesheet" type="text/css" href="http://www.chonburifootballclub.com/plugins/lofslidernews/css/layout.css" />
                    <link rel="stylesheet" type="text/css" href="http://www.chonburifootballclub.com/plugins/lofslidernews/css/style.css" />
                    <script language="javascript" type="text/javascript" src="http://www.chonburifootballclub.com/plugins/lofslidernews/js/jquery.js"></script>
                    <script language="javascript" type="text/javascript" src="http://www.chonburifootballclub.com/plugins/lofslidernews/js/jquery.easing.js"></script>
                    <script language="javascript" type="text/javascript" src="http://www.chonburifootballclub.com/plugins/lofslidernews/js/script.js"></script>
                    <script type="text/javascript">
                        $(document).ready( function(){	
                            $('#lofslidecontent45').lofJSidernews( {interval:4000,   direction:'opacity',   duration:1000,  easing:'easeInOutSine'} );						
                        });

                    </script>
                    <!----Scipt banner loopslider bottom-------->
                    <script language="javascript" type="text/javascript" src="http://www.chonburifootballclub.com/plugins/loopslider/loopedslider.js"></script>
                    <style type="text/css" media="screen">	
                        /*
                         * Required 
                        */
                        .container { width:280px; height:190px; overflow:hidden; position:relative; cursor:pointer; }
                        div.slides { position:absolute; top:0; left:0; }
                        ul.slides { position:absolute; top:0; left:0; list-style:none; padding:0; margin:0; }
                        div.slides div,ul.slides li { position:absolute; top:0; width:280px; display:none; padding:0; margin:0; }
                        /*
                         * Optional
                        */
                        #loopedSlider,#newsSlider { margin:0 auto; width:280px; position:relative; clear:both; }
                        ul.pagination { list-style:none; padding:0; margin:0; }
                        ul.pagination li  { float:left; }
                        ul.pagination li a { padding:3px 4px; }
                        ul.pagination li.active a { background:#B5B7B7; color:white; }
                    </style> 
                    <br />
                    <!-----------news---------->
                    <div id="divnew">
                        <!------------------------------------- THE CONTENT ------------------------------------------------->
                        <div id="lofslidecontent45" class="lof-slidecontent">
                            <div class="preload"><div></div></div>
                            <!-- MAIN CONTENT --> 
                            <div class="lof-main-outer">
                                <ul class="lof-main-wapper">
                                    <?php foreach ($query->result() as $row): ?>
                                        <li>
                                            <img src="http://www.chonburifootballclub.com/public/img/upload/b7f2a1423b4baa4f34d3b0c5172e05b8.jpg" title="'<?= $row->title ?>'" width="500" height="310" />  
                                            <div class="lof-main-item-desc">
                                                <h3>
                                                    <?= anchor("blog/comments/" . $row->id, $row->title); ?>
                                                </h3>
                                                <p style="margin-bottom:10px;"><?= $row->title ?></p>
                                            </div>                                    
                                        </li>
                                    <?php endforeach; ?> 
                                </ul>  	
                            </div>
                            <!-- END MAIN CONTENT --> 
                            <!-- NAVIGATOR -->
                            <div class="lof-navigator-outer">
                                <ul class="lof-navigator">
                                    <?php foreach ($query->result() as $row): ?>
                                        <li>
                                            <div>
                                                <h3>
                                                    <?= anchor("blog/comments/" . $row->id, $row->title); ?>
                                                </h3>
                                                <span style="margin-top:0px;margin-bottom:10px;font-size:11px;">
                                                    Posted : Wed, 30 May 2012 [ข่าวความเคลื่อนไหว]
                                                </span>
                                            </div>    
                                        </li>                                    
                                    <?php endforeach; ?> 

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-----------Event---------->
                    <div id="divevent">
                        <br />
                        <div id="boxcentent">
                            <div class="boxcentent-title">&nbsp;CLIP VDO</div>
                            <center>
                                <a href="index.php/blog/clipvdo/652/Sponsor_Thai_Premier_League_/" >
                                    <img src="http://www.chonburifootballclub.com/public/img/upload/b62a47a2ec23f983b00086013e9779b8.jpg" border="0"width="260" height="161" style="border:1px solid #DEDCDC;"></center>
                                </a>
                                <div class="min-caption"><a href="index.php/blog/clipvdo/652/Sponsor_Thai_Premier_League_/" >Sponsor Thai Premier League </a></div>
                                <div class="min-sub">เมืองทอง ยูไนเต็ด ชนะ ชลบุรี เอฟซี 2-0 32</div>
                                <div class="min-date">Posted : Mon, 28 May 2012 </div>
                        </div>
                        <div id="boxcentent">
                            <div class="boxcentent-title">&nbsp;INTERVIEW</div>
                            <center>
                                <a href="index.php/blog/interview/615/เบื้องหลังถ่ายแบบ_ครั้งแรกของ__เจ้าตี๋_/" >
                                    <img src="http://www.chonburifootballclub.com/public/img/upload/f82235f494f709c0678edaf997587e83.jpg" border="0" width="260" height="161" style="border:1px solid #DEDCDC;">
                                        </center>
                                </a>
                                <div class="min-caption"><a href="index.php/blog/interview/615/เบื้องหลังถ่ายแบบ_ครั้งแรกของ__เจ้าตี๋_/" >เบื้องหลังถ่ายแบบ ครั้งแรกของ 'เจ้าตี๋'</a></div>
                                <div class="min-sub">สินทวีชัย หทัยรัตนกุล นายทวาร ฉลามชล</div>
                                <div class="min-date">Posted : Thu, 10 May 2012 </div>
                        </div>
                        <div id="boxcentent">
                            <div class="boxcentent-title">&nbsp;NEXT MATCH</div>
                            <center>
                                <a href="index.php/blog/commentary/639/NEXT_-_Sponsor_Thai_Premier_League/" >
                                    <img src="http://www.chonburifootballclub.com/public/img/upload/b469af97b8b22c5a4b78fe0de4e70edb.jpg" border="0" width="260" height="161" style="border:1px solid #DEDCDC;">
                                        </center>
                                </a>
                                <div class="min-caption"><a href="index.php/blog/commentary/639/NEXT_-_Sponsor_Thai_Premier_League/" >NEXT - Sponsor Thai Premier League</a></div>
                                <div class="min-sub">ชลบุรี เอฟซี vs พัทยา ยูไนเต็ด</div>
                                <div class="min-date">Posted : Tue, 22 May 2012 </div>
                        </div>

                        <!----row 2 ---->
                        <div id="boxcentent">
                            <div class="boxcentent-title">&nbsp;PRODUCTS</div>
                            <center>
                                <a href="http://chonburifcstore.welovebooking.net/" >
                                    <img src="http://www.chonburifootballclub.com/public/img/upload/f2d1b19eba74372f9929d90e31f4c0b2.jpg" border="0" width="260" height="161" style="border:1px solid #DEDCDC;">
                                        </center>
                                </a>
                                <div class="min-caption"><a href="http://chonburifcstore.welovebooking.net/" >Shop It In Style</a></div>
                                <div class="min-sub">สินค้าและของที่ระลึกแท้จากสโมสรมากมาย ที่ Online Store ของเรา</div>
                                <div class="min-date">Posted : Fri, 4 November 2011 </div>
                        </div>
                        <div id="boxcentent"> 
                            <div class="boxcentent-title">&nbsp;Shark Channel</div>
                            <center><a href=" http://www.youtube.com/user/SharksFCchannel/"  title="The Shark TV">
                                    <img src="http://www.chonburifootballclub.com/public/img/shark_vdo.jpg" border="0" style="border:1px solid #DEDCDC;">
                                </a></center>
                            <div class="min-caption"><a href=" http://www.youtube.com/user/SharksFCchannel/" title="The Shark TV" width="260" height="161" >Shark Channel</a></div>
                            <div class="min-sub">ติดตามเราได้ที่ Shark Channel </div>
                            <div class="min-date"></div>
                        </div>

                        <div id="boxcentent">
                            <div class="boxcentent-title">&nbsp;MATCHDAY MAGAZINE</div>
                            <center>
                                <a href="index.php/blog/interview/641/นิตยสารฉลามชล__Match_Day__05/" >
                                    <img src="http://www.chonburifootballclub.com/public/img/upload/229a99331c6c5932b66725e81836925d.jpg" border="0" width="260" height="161" style="border:1px solid #DEDCDC;">
                                        </center>
                                </a>
                                <div class="min-caption"><a href="index.php/blog/interview/641/นิตยสารฉลามชล__Match_Day__05/" >นิตยสารฉลามชล 'Match Day' 05</a></div>
                                <div class="min-sub">Bite like a SHARKS!</div>
                                <div class="min-date">Posted : Tue, 22 May 2012 </div>
                        </div>
                    </div>

                    <!-----------Event---------->
                    <div id="divFollow">
                        <br />
                        <p>
                            นิยายตอนใหม่ๆ
                        </p>
                    </div>
                </div>
                <div id="right">
                    <br />
                    <a href="#" title="" >
                        <img src="http://www.chonburifootballclub.com/public/img/adtbanner/c6c5b3fb19b6da1e997f56deeb6c2712.jpg" width="158" style="border:1px solid #DEDCDC;" />
                    </a>
                    <br /><br />
                    <div id="box-banner-right">
                        <div class="small">
                            <ul>
                                <li>
                                    <a href="#" title="">
                                        <img src="http://www.chonburifootballclub.com/public/img/adtbanner/a022aa86a729b75dd2db390b3d9cecd0.jpg" width="70" height="70"style="border:1px solid #DEDCDC;" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br class="clear" />
                <!--stop-content_start-->
                <div id="footer">
                    <div class="sitemap">
                        <div class="detail_site_map">
                            <a href="index.php/blog/aboutus/" class="link_sitemap">หน้าแรก</a>
                            <ul class="list_sitemap">
                                <li><a href="#" >up to date</a></li>
                                <li><a href="#/" >ร้านหนังสือ</a></li>
                                <li><a href="#" >อ่านหนังสือ</a></li>
                            </ul>
                        </div>

                        <div class="detail_site_map">
                            <a href="#" class="link_sitemap">up to date</a>
                            <ul class="list_sitemap">
                                <li><a href="#"  rel="nofollow">New Release</a></li>
                                <li><a href="#"  rel="nofollow">Best Saler</a></li>
                            </ul>
                        </div>

                        <div class="detail_site_map">
                            <a href="#" class="link_sitemap">ร้านหนังสือ</a>
                            <ul class="list_sitemap">
                                <li><a href="#"  rel="nofollow">โรมานซ์</a></li>
                                <li><a href="#"  rel="nofollow">สการ์เล็ต</a></li>
                                <li><a href="#"  rel="nofollow">ไทนี่</a></li>
                                <li><a href="#"  rel="nofollow">Flower of love</a></li>
                                <li><a href="#"  rel="nofollow">มิราจ</a></li>
                                <li><a href="#"  rel="nofollow">ทั่วไป</a></li>                       
                            </ul>
                        </div>

                        <div class="detail_site_map">
                            <a href="#" class="link_sitemap">อ่านหนังสือ</a>
                            <ul class="list_sitemap">
                                <li><a href="#"  rel="nofollow">โรมานซ์</a></li>
                                <li><a href="#"  rel="nofollow">สการ์เล็ต</a></li>
                                <li><a href="#"  rel="nofollow">ไทนี่</a></li>
                                <li><a href="#"  rel="nofollow">Flower of love</a></li>
                                <li><a href="#"  rel="nofollow">มิราจ</a></li>
                                <li><a href="#"  rel="nofollow">ทั่วไป</a></li>   
                            </ul>
                        </div>

                        <div class="detail_site_map">
                            <a href="#" class="link_sitemap">ติดตามเรา</a>
                            <ul class="list_sitemap">
                                <li><a href="#"  rel="nofollow" title="Facebook">Facebook</a></li>
                                <li><a href="#"  rel="nofollow" title="เว็บบอร์ดฉลามชล">เว็บบอร์ด</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="bgfooter" >
                        <span style="color:#0A0A0A;font-size:12px;margin-left:20px;">
                            <table width="1000" align="center" border="0">
                                <tbody>
                                    <tr>
                                        <td width="30">
                                            <td align="left" width="430"><b>บริษัท เว็บสเตอร์ โซลูชั่น จำกัด</b>
                                                <br />
                                            </td>
                                            <td align="right" width="450">
                                                <b>Website solution by <a href="http://www.webster.co.th/" >บริษัท เว็บสเตอร์ โซลูชั่น จำกัด</a> </b> 
                                                <br />
                                            </td>
                                            <td width="20"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="center"><br /> 
                                            ว่าง
                                            <script type="text/javascript" language="javascript1.1" src="http://tracker.stats.in.th/tracker.php?sid=37030"></script><noscript><a  href="http://www.stats.in.th/">www.Stats.in.th</a></noscript>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>