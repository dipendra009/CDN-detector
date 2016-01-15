<!DOCTYPE html>
<html>
 <head>
   <title>AnchorFree</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="css/style.css?d=1446680605" />
   <script type="text/javascript">
       startTime = new Date().getTime();
        var _AF2$={'CT':'11K'};
        var _AF$={                    
            'HSH':'',
            'frSrc':function(){		
                    if(!arguments[0]||!arguments[1]){return}
                    if(typeof(arguments[0]) != 'object'){frames[arguments[0]].location.href=arguments[1]}
                    else{arguments[0].location.href=arguments[1]}},
            'scApp':function(i,s){
                    var old = document.getElementById(i),
                    head = document.getElementsByTagName("head")[0],
                    script = document.createElement('script');
                        if(old!=null){		
                                old.parentNode.removeChild(old);		
                                delete old;		
                        }		
                        script.id = i;		
                        script.type = 'text/javascript';		
                        script.src = s;		
                        head.appendChild(script);		
                    }};
        _AF$.show = function(size,prFr,frId){ _AF$.frSrc(frId,prFr); };        
               
        String.prototype.trim = function() {
            return this.replace(/^\s*/, "").replace(/\s*$/, "");
        };
        function SubmitSearch() {
            var inp = document.getElementById('sb_form_q');
            if((inp.value).trim()=="") {
                    document.getElementById('b_searchbox').style.borderColor = "red";
                    return false;
            } else {
                    return true;
            }

        };
        //window.onload = function(){
        //    Slider.init();
        //}
        // slider
        var Slider = {
            currentSlide : 0,
            timer : null,
            init : function (){
                this.tabs = document.getElementById('slideTitel');
                this.views = document.getElementById('slideView');
                this.timer = setTimeout(function(){Slider.next();}, 5000);
            },
            next : function(){
                this.currentSlide++;
                if(this.currentSlide == 5) this.currentSlide = 0;
                for(var i=0; i<=4; i++){
                    this.tabs.getElementsByTagName('li')[i].className = '';
                    this.views.getElementsByTagName('li')[i].className = '';
                }
                this.tabs.getElementsByTagName('li')[this.currentSlide].className = 'current';
                this.views.getElementsByTagName('li')[this.currentSlide].className = 'current';
                this.timer = setTimeout(function(){Slider.next();}, 5000);
            },
            hover : function(li){
                clearTimeout(this.timer);
                for(var i=0; i<=4; i++){
                    this.views.getElementsByTagName('li')[i].className = '';
                }
                this.views.getElementsByTagName('li')[li].className = 'current';
            },
            go : function(){
                for(var i=0; i<=4; i++){
                    this.views.getElementsByTagName('li')[i].className = '';
                }
                this.views.getElementsByTagName('li')[this.currentSlide].className = 'current';
                this.timer = setTimeout(function(){Slider.next();}, 5000);
            }
        }
        // end:slider
   </script>
 </head>
 <body>
         
     <div class="h__">
         <a href="index.html" class="logo"></a>
         <div id="b728x90">
            <iframe src='http://delivery.anchorfree.us/afrlg.php?zoneid=229&affr=displayed_iframe_afus&cat=11K&loc=http%3A%2F%2Fanchorfree.us%2Findex.php&referer=' framespacing='0' frameborder='no' scrolling='no' width='728' height='90' allowtransparency='true'></iframe>
         </div>
     </div>
     <div class="a">
         <div class="menu">
             <ul class="menu_r">
                 <li class="si"><a href="http://www.hsselite.com/account?utm_medium=Free&utm_source=Banner&utm_campaign=StaticAFus">Sign in</a></li>
                 <li class="up"><a href="http://www.hsselite.com/buy?utm_medium=Free&utm_source=Banner&utm_campaign=StaticAFus">Upgrade to Hotspot Shield Elite</a></li>
             </ul>
            <ul>
 <li ><a href='news/index.html?s=top-news'>Top News</a><ul><li ><a href='news/index.html?s=us-news'><nobr>U.S. News</nobr></a></li><li ><a href='news/index.html?s=world-news'><nobr>World News</nobr></a></li><li ><a href='news/index.html?s=news-photos'><nobr>News Photos</nobr></a></li><li ><a href='news/index.html?s=featured'><nobr>Featured Photo Galleries</nobr></a></li><li ><a href='news/index.html?s=odd-news'><nobr>Odd News</nobr></a></li></ul></li><li ><a href='news/index.html?s=entertainment'>Entertainment</a><ul><li ><a href='news/index.html?s=movies'><nobr>Movies</nobr></a></li><li ><a href='news/index.html?s=music'><nobr>Music</nobr></a></li><li ><a href='news/index.html?s=tv'><nobr>TV</nobr></a></li><li ><a href='news/index.html?s=entertainment-photos'><nobr>Entertainment Photos</nobr></a></li></ul></li><li ><a href='news/index.html?s=business'>Business</a><ul><li ><a href='news/index.html?s=security'><nobr>Security</nobr></a></li><li ><a href='news/index.html?s=analysis-economic-outlook'><nobr>Analysis: Economic Outlook</nobr></a></li></ul></li><li ><a href='news/index.html?s=sports'>Sports</a><ul><li ><a href='news/index.html?s=sports-photos'><nobr>Sports Photos</nobr></a></li></ul></li><li ><a href='news/index.html?s=science'>Science</a><ul><li ><a href='news/index.html?s=health'><nobr>Health</nobr></a></li><li ><a href='news/index.html?s=tech'><nobr>Tech</nobr></a></li></ul></li><li ><a href='news/index.html?s=videos'>Videos</a><ul><li ><a href='news/index.html?s=tech-videos'><nobr>Tech Videos</nobr></a></li><li ><a href='news/index.html?s=sports-videos'><nobr>Sports Videos</nobr></a></li><li ><a href='news/index.html?s=entertainment-videos'><nobr>Entertainment Videos</nobr></a></li><li ><a href='news/index.html?s=business-videos'><nobr>Business Videos</nobr></a></li><li ><a href='news/index.html?s=science-videos'><nobr>Science Videos</nobr></a></li></ul></li>                <li><a href="http://blog.hotspotshield.com" target="_blank">Blog</a></li>
            </ul>
        </div>
        <div class="slider">
             
            <ul class="slid_menu" id="slideTitel">
                <li class='current'><a href='news/article.php?s=top-news&amp;t=un-confirms-use-of-mustard-chlorine-gas-in-syrian-civil-war' onmouseover='Slider.hover(0);' onmouseout='Slider.go()'>U.N. confirms use of...</a></li><li ><a href='news/article.php?s=top-news&amp;t=indian-pm-modis-bjp-suffers-defeat-in-election-seen-as-referendum' onmouseover='Slider.hover(1);' onmouseout='Slider.go()'>Indian PM Modis BJP...</a></li><li ><a href='news/article.php?s=top-news&amp;t=myanmar-votes-in-first-open-election-in-25-years-suu-kyi-win-expected' onmouseover='Slider.hover(2);' onmouseout='Slider.go()'>Myanmar votes in first...</a></li><li ><a href='news/article.php?s=movies&amp;t=spectre-tops-the-north-american-box-office-with-73m' onmouseover='Slider.hover(3);' onmouseout='Slider.go()'>Spectre tops the North...</a></li><li ><a href='news/article.php?s=tv&amp;t=donald-trump-hosts-saturday-night-live-insists-i-know-how-to-take-a-joke' onmouseover='Slider.hover(4);' onmouseout='Slider.go()'>Donald Trump hosts...</a></li>            </ul>
            <ul class="slid_view" id="slideView">
                <li class='current'><a href='news/article.php?s=top-news&amp;t=un-confirms-use-of-mustard-chlorine-gas-in-syrian-civil-war'><img src='cached_images/full/un-confirms-use-of-mustard-chlorine-gas-in-syrian-civil-war.jpg' alt='' /><span><b>U.N. confirms use of mustard, chlorine gas in Syrian civil war</b>MAREA, Syria, Nov. 8 (UPI) -- The United Nations has confirmed that both mustard and chlorine gas have been used in attacks during the Syrian...</span></a></li><li ><a href='news/article.php?s=top-news&amp;t=indian-pm-modis-bjp-suffers-defeat-in-election-seen-as-referendum'><img src='cached_images/full/indian-pm-modis-bjp-suffers-defeat-in-election-seen-as-referendum.jpg' alt='' /><span><b>Indian PM Modis BJP suffers defeat in election seen as referendum</b>NEW DELHI, Nov. 8 (UPI) -- Indian Prime Minister Narendra Modi conceded defeat on Sunday for his governing Bharatiya Janata Party in a key...</span></a></li><li ><a href='news/article.php?s=top-news&amp;t=myanmar-votes-in-first-open-election-in-25-years-suu-kyi-win-expected'><img src='cached_images/full/myanmar-votes-in-first-open-election-in-25-years-suu-kyi-win-expected.jpg' alt='' /><span><b>Myanmar votes in first open election in 25 years; Suu Kyi win expected</b>NAYPYIDAW, Myanmar, Nov. 8 (UPI) -- Millions of people voted on Sunday in Myanmars first openly contested national election in 25 years after...</span></a></li><li ><a href='news/article.php?s=movies&amp;t=spectre-tops-the-north-american-box-office-with-73m'><img src='cached_images/full/spectre-tops-the-north-american-box-office-with-73m.jpg' alt='' /><span><b>Spectre tops the North American box office with $73M</b>LOS ANGELES, Nov. 8 (UPI) -- The latest James Bond adventure Spectre is the No. 1 movie in North America, earning $73 million at the box office...</span></a></li><li ><a href='news/article.php?s=tv&amp;t=donald-trump-hosts-saturday-night-live-insists-i-know-how-to-take-a-joke'><img src='cached_images/full/donald-trump-hosts-saturday-night-live-insists-i-know-how-to-take-a-joke.jpg' alt='' /><span><b>Donald Trump hosts Saturday Night Live, insists, I know how to take a joke</b>NEW YORK, Nov. 8 (UPI) -- Although hundreds of protesters gathered outside Saturday Night Lives New York studio to oppose the decision to let...</span></a></li>            </ul>
        </div>
        <div class="search">
            <div class="searchBar">
                <form method="get" action="index.php" id="sb_form" onSubmit="return SubmitSearch();">
                    <a href="index.php" class="b_logoArea">
                        <h1 class="blogo">Bing</h1>
                    </a>
                    <div class="b_searchboxForm" id="b_searchbox">
                        <input class="b_searchbox" id="sb_form_q" name="q" title="" type="search" value="" maxlength="1000" autocomplete="off" title="Search for">
                            <span class="b_searchboxSubmitWrapper"><input type="submit" class="b_searchboxSubmit" id="sb_form_go" title="Search" tabindex="0" name="go"></span>
                            <input type="hidden" name="askt" value="1000" />
                            <input type="hidden" name="tag" value="UNREGISTERED" />
                            <div id="sw_as"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="video">
           
            <div class="text">
            <p><strong>FARRELL: NO 'SOCIAL STIGMA' AROUND SINGLE PEOPLE</strong><br />
                At the London premiere of quirky romantic comedy 'The Lobster,' Colin Farrell talks about...</p>
            </div>

            <div class="video_box">
                                <iframe src="http://delivery.anchorfree.us/player-multi.php?zoneid=230&cmpb=0&w=480&h=270&ver=old&v_title=FARRELL%3A+NO+%27SOCIAL+STIGMA%27+AROUND+SINGLE+PEOPLE&ref=http%3A%2F%2Fanchorfree.usindex.php&affr=displayed_iframe_afus&af_video=%2Fcached_images%2Ffull%2Ffarrell-no-social-stigma-around-single-people.flv&thumbnail=%2Fcached_images%2Fthumbnail%2Ffarrell-no-social-stigma-around-single-people_640_480.jpg" width="480" height="330" frameborder="0" scrolling="no"></iframe>

            </div>
        </div>
        <div id="b300x250">
                <iframe src='http://delivery.anchorfree.us/afrlg.php?zoneid=231&affr=displayed_iframe_afus&cat=11K&loc=http%3A%2F%2Fanchorfree.us%2Findex.php&referer=' framespacing='0' frameborder='no' scrolling='no' width='300' height='250' allowtransparency='true'></iframe>
        </div>
        <div id="b790x60"><iframe src='http://delivery.anchorfree.us/afrlg.php?zoneid=446&affr=displayed_iframe_afus&cat=11K&loc=http%3A%2F%2Fanchorfree.us%2Findex.php&referer=' framespacing='0' frameborder='no' scrolling='no' width='780' height='60' allowtransparency='true'></iframe></div>
        <div class="r">
            <div id="b160x600">
                    <iframe src='http://delivery.anchorfree.us/afrlg.php?zoneid=232&affr=displayed_iframe_afus&cat=11K&loc=http%3A%2F%2Fanchorfree.us%2Findex.php&referer=' framespacing='0' frameborder='no' scrolling='no' width='160' height='600' allowtransparency='true'></iframe>
            </div>
            <div class="share">
                <b>Follow us:</b>
                <ul>
                    <li title="share_f"><a href="http://www.facebook.com/sharer.php?u=http://www.facebook.com/HotspotShield"></a></li>
                    <li title="share_t"><a data-url="http://goo.gl/6sfKP" data-text="I'm accessing my favorite sites privately &amp; securely with HotspotShield. You should get it, too!" data-via="hotspotshield" data-count="vertical" href="http://twitter.com/home?status=Check%20out%20http://www.anchorfree.us%20-%20via%20@HotspotShield "></a></li>
                    <li title="share_e"><a href="mailto:your@email.address?subject=Download Hotspot Shield&amp;body=Hey,%0A%0AI wanted to let you know about this great FREE software called Hotspot Shield I use for internet privacy, security and to access blocked or censored sites.%0A%0AIt is a VPN which protects your identity, prevents people from tracking you and also lets you tunnel around firewalls and blocks.%0A%0AGo here to download for free: http://goo.gl/ke6Te %0A%0AEnjoy! %0A%0AYour Friend"  target="_blank"></a></li>
                </ul>
                <p><a href="http://www.hotspotshield.com/share/" target="_blank">Share <strong>Hotspot Shield</strong> with your friends and family!</a></p>
            </div>
        </div>
        <div class="news">
            <br />
<div class="news_box"><h4>Top News</h4><ul><li><h3><a href="news/article.php?s=top-news&amp;t=gunmen-attack-bar-in-burundis-capital-killing-at-least-nine-people">Gunmen attack bar in Burundis capital, killing at least nine people</a></h3><p>BUJUMBURA, Burundi, Nov. 8 (UPI) -- Gunmen killed at least nine people in a bar in Burundis capital Saturday, the same night as a government...</p></li><li><a href="news/article.php?s=top-news&amp;t=un-confirms-use-of-mustard-chlorine-gas-in-syrian-civil-war" class="img_box" style="background-image: url(cached_images/thumbnail/un-confirms-use-of-mustard-chlorine-gas-in-syrian-civil-war.jpg);"></a><h3><a href="news/article.php?s=top-news&amp;t=un-confirms-use-of-mustard-chlorine-gas-in-syrian-civil-war">U.N. confirms use of mustard, chlorine gas in Syrian civil war</a></h3><p>MAREA, Syria, Nov. 8 (UPI) -- The United Nations has confirmed that both mustard and chlorine gas have been used in attacks during the Syrian...</p></li><li><a href="news/article.php?s=top-news&amp;t=indian-pm-modis-bjp-suffers-defeat-in-election-seen-as-referendum" class="img_box" style="background-image: url(cached_images/thumbnail/indian-pm-modis-bjp-suffers-defeat-in-election-seen-as-referendum.jpg);"></a><h3><a href="news/article.php?s=top-news&amp;t=indian-pm-modis-bjp-suffers-defeat-in-election-seen-as-referendum">Indian PM Modis BJP suffers defeat in election seen as referendum</a></h3><p>NEW DELHI, Nov. 8 (UPI) -- Indian Prime Minister Narendra Modi conceded defeat on Sunday for his governing Bharatiya Janata Party in a key...</p></li></ul><p class='a_more'><a href='news/index.html?s=top-news'>» more</a></p></div><div class="news_box"><h4>Entertainment</h4><ul><li><a href="news/article.php?s=entertainment&amp;t=ridley-scott-gets-walk-of-fame-star" class="img_box" style="background-image: url(cached_images/thumbnail/ridley-scott-gets-walk-of-fame-star.jpg);"></a><h3><a href="news/article.php?s=entertainment&amp;t=ridley-scott-gets-walk-of-fame-star">Ridley Scott gets Walk of Fame star</a></h3><p>English film director Sir Ridley Scott was honored with the 2,564th star on the Hollywood Walk of Fame in Los Angeles on November 5, 2015.</p></li><li><a href="news/article.php?s=entertainment&amp;t=mockingjay-part-2-premiere-in-london" class="img_box" style="background-image: url(cached_images/thumbnail/mockingjay-part-2-premiere-in-london.jpg);"></a><h3><a href="news/article.php?s=entertainment&amp;t=mockingjay-part-2-premiere-in-london">Mockingjay Part 2 premiere in London</a></h3><p>The UK Premiere of "The Hunger Games: Mocking Jay part 2" at Odeon Leicester Square in London on November 5, 2015.</p></li><li><a href="news/article.php?s=entertainment&amp;t=celebrity-best-friends" class="img_box" style="background-image: url(cached_images/thumbnail/celebrity-best-friends.jpg);"></a><h3><a href="news/article.php?s=entertainment&amp;t=celebrity-best-friends">Celebrity Best Friends</a></h3><p>In honor of National Best Friend Day (June 8) heres a gallery featuring celebrities who are Best Friends Forever in real life.</p></li></ul><p class='a_more'><a href='news/index.html?s=entertainment'>» more</a></p></div><div class="news_box"><h4>Sports</h4><ul><li><h3><a href="news/article.php?s=sports&amp;t=kansas-city-royals-ben-zobrist-welcomes-daughter">Kansas City Royals Ben Zobrist welcomes daughter</a></h3><p>KANSAS CITY, Mo., Nov. 6 (UPI) -- While second baseman Ben Zobrist sadly watches some of his Kansas City Royals family depart for free agency, he...</p></li><li><a href="news/article.php?s=sports&amp;t=kansas-city-royals-lorenzo-cain-behind-free-taco-bell-breakfast" class="img_box" style="background-image: url(cached_images/thumbnail/kansas-city-royals-lorenzo-cain-behind-free-taco-bell-breakfast.jpg);"></a><h3><a href="news/article.php?s=sports&amp;t=kansas-city-royals-lorenzo-cain-behind-free-taco-bell-breakfast">Kansas City Royals Lorenzo Cain behind free Taco Bell breakfast</a></h3><p>KANSAS CITY, Mo., Nov. 4 (UPI) -- Dont forget to pickup your free breakfast Thursday at Taco Bell, courtesy of Kansas City Royals outfielder...</p></li><li><a href="news/article.php?s=sports&amp;t=college-football-playoff-rankings-put-clemson-first-baylor-and-tcu-outside-top-5" class="img_box" style="background-image: url(cached_images/thumbnail/college-football-playoff-rankings-put-clemson-first-baylor-and-tcu-outside-top-5.jpg);"></a><h3><a href="news/article.php?s=sports&amp;t=college-football-playoff-rankings-put-clemson-first-baylor-and-tcu-outside-top-5">College Football Playoff rankings put Clemson first, Baylor and TCU outside top 5</a></h3><p>GRAPEVINE, Texas, Nov. 3 (UPI) -- The selection committee for the College Football Playoff released its initial rankings Tuesday evening, and...</p></li></ul><p class='a_more'><a href='news/index.html?s=sports'>» more</a></p></div><div class="news_box"><h4>Business</h4><ul><li><a href="news/article.php?s=business&amp;t=report-volkswagen-may-pay-diesel-owners-up-to-1250-amid-emissions-scandal" class="img_box" style="background-image: url(cached_images/thumbnail/report-volkswagen-may-pay-diesel-owners-up-to-1250-amid-emissions-scandal.jpg);"></a><h3><a href="news/article.php?s=business&amp;t=report-volkswagen-may-pay-diesel-owners-up-to-1250-amid-emissions-scandal">Report: Volkswagen may pay diesel owners up to $1,250 amid emissions scandal</a></h3><p>WASHINGTON, Nov. 7 (UPI) -- Volkswagen of America may compensate diesel car owners up to $1,250 in an attempt to revive consumer trust as it faces...</p></li><li><h3><a href="news/article.php?s=business&amp;t=pebble-to-launch-time-round-its-first-circular-smartwatch">Pebble to launch Time Round, its first circular smartwatch</a></h3><p>PALO ALTO, Calif., Nov. 7 (UPI) -- Pebble, the wearable tech company made popular on Kickstarter, will launch its first circular smartwatch...</p></li><li><h3><a href="news/article.php?s=business&amp;t=blackberry-enlists-android-to-launch-new-smartphone-priv">BlackBerry enlists Android to launch new smartphone, Priv</a></h3><p>NEW YORK, Nov. 7 (UPI) -- BlackBerry has traded its own operating system for one more widely used to power its latest professional-grade...</p></li></ul><p class='a_more'><a href='news/index.html?s=business'>» more</a></p></div>                
            <br clear="all" />
        </div>
     </div>
    <div class="f">
    <div class="nav">
    <ul>
            <li><a href="http://anchorfree.com/about.php">About</a></li>
            <li><a href="http://anchorfree.com/terms-of-service.php">Terms of Service</a></li>
            <li><a href="http://anchorfree.com/privacy.php">Privacy</a></li>
            <li><a href="http://anchorfree.com/support.php">Help</a></li>
            <li><a href="http://hotspotshield.com/share">Share</a></li>
            <li><a href="http://anchorfree.com/advertise.php">Advertise</a></li>
            <li><a href="http://blog.hotspotshield.com" target="_blank">Hotspot Shield Blog</a></li>
    </ul>
</div>
    <div>
            </div>
    <p class="copy">Copyright © 2014 AnchorFree, Inc. All Rights Reserved</p>
</div>     <script type="text/javascript">Slider.init();
    document.write('<img style="border:0;width:1px;height:1px;" src="http://rpt.anchorfree.net/'+(new Date().getTime())+'/afrpt.gif?afcid=1794&affr=convert_afus&cat=11K&loc=http%3A%2F%2Fanchorfree.us%2Findex.php&referer=" />');  
var _comscore=_comscore||[];_comscore.push({c1:"2",c2:"12294831"});(function(){var e=document.createElement("script"),t=document.getElementsByTagName("script")[0];e.async=true;e.src=(document.location.protocol=="https:"?"https://sb":"http://b")+".scorecardresearch.com/beacon.js";t.parentNode.insertBefore(e,t)})();</script><noscript><img src="http://b.scorecardresearch.com/p?c1=2&c2=12294831&cv=2.0&cj=1" /></noscript>
<script type="text/javascript">function afTestFlash(){
    var affr='yes_flash2', rpt_img = document.createElement('img'), rdm = Math.floor(Math.random()*10), img_id = 'A'+rdm;
    rpt_img.id = img_id;
    rpt_img.style.display = 'none';
    rpt_img.src='http://rpt.anchorfree.net/'+(new Date().getTime())+'/afrpt.gif?afcid=1794&affr='+affr+'&cat=11K&loc=http%3A%2F%2Fanchorfree.us%2Findex.php&referer=';
    document.body.appendChild(rpt_img);
 };
 var hasFlash = false, affr="no_flash";
 try{var fo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');if(fo){hasFlash = true;}}catch(e){if(navigator.mimeTypes["application/x-shockwave-flash"]!=undefined){hasFlash = true;}}if(hasFlash){affr="yes_flash";}document.write('<img style="border:0;width:1px;height:1px;" src="http://rpt.anchorfree.net/'+(new Date().getTime())+'/afrpt.gif?afcid=1794&affr='+affr+'&cat=11K&loc=http%3A%2F%2Fanchorfree.us%2Findex.php&referer=" />');
if(/FW([0-9\.\s]+)/.test(navigator.userAgent) && !hasFlash) {
    function uhsd_response(err,err_m){};
    _scApp(0,'http://box.anchorfree.net/uhsd2.php?act=add&NO_FBW_FLASH=1');
}
</script>
 <object data="testflash.swf" type="application/x-shockwave-flash" id="testflash" name="testflash" style="width:1px;height:1px;">
     <param value="http://anchorfree.us/testflash.swf" name="movie"></param>
     <param value="always" name="AllowScriptAccess"></param>   
 </object>
<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];
 (function() {
var elem = document.createElement('script');
elem.src = "http://edge.quantserve.com/quant.js?tm="+new Date().getTime();
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
var rpti = document.createElement("img");rpti.src="http://a433.com/delivery/lg.php?afcid=5338&affr=displayed_iframe_quantcast";rpti.style.display="none";
})();
 _qevents.push({
qacct:"p-9e__RkPdAnQgk"
});
</script>
 
<noscript>
<div style="display:none;">
<img src="http://a433.com/delivery/lg.php?afcid=5338&affr=displayed_iframe_quantcast&oadest=http%3A%2F%2Fpixel.quantserve.com%2Fpixel%2Fp-9e__RkPdAnQgk.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
<script type="text/javascript" src="http://s.skimresources.com/js/83597X1535466.skimlinks.js"></script>
 </body>
</html>