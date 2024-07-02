<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanTracker</title>
    <link rel="stylesheet" href="Style/style.css">
    <script src="/js/background.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

</head>
<body>
<div id="grid">
    <div id="left">
        <div id="header" class="maintag"> 
                <div id="header-logo" class="header-contents"><img src="img/pan.svg" width="60px" height="60px"> </div>
                <div class="header-contents"> <a id="a" target="iframe" href="https://www.google.com/maps/d/u/0/embed?mid=1xP5IzjCZcVTCm45LkAyA96rmL3u9ExI&ehbc=2E312F&noprof=1"><img src="img/home.svg" width="40px" height="40px"></a> </div>
                <div  class="header-contents" id="list"> <a onclick="link()"><img src="img/settings.svg" width="30px" height="30px" ></a> </div>
                <div id="header-list" class="hide" >
                <div  class="header-contents"> <a target="iframe" href="http://udim.koeri.boun.edu.tr/zeqmap/osmapiframe.asp"><img src="img/tr.svg" width="60px" height="30px" ></a> </div>
                    <div class="header-contents"> <a target="iframe" href="https://www.google.com/maps/d/u/0/embed?mid=1xqVKYLkBnKud0NillOoviCDCTrvg4XI&ehbc=2E312F&noprof=1"><img src="img/7.svg" width="30px" height="30px" ></a> </div>
                    <div  class="header-contents"> <a target="iframe" href="https://www.google.com/maps/d/u/0/embed?mid=1xP5IzjCZcVTCm45LkAyA96rmL3u9ExI&ehbc=2E312F&noprof=1"><img src="img/30.svg" width="30px" height="30px" ></a> </div>
                 <!--   <div  class="header-contents"> <a target="iframe" href="http://www.koeri.boun.edu.tr/scripts/lst6.asp"><img src="img/rss.svg" width="30px" height="30px" ></a> </div> -->
                    <div  class="header-contents"> <a target="iframe" href="rss.php"><img src="img/rss.svg" width="30px" height="30px" ></a> </div>
                </div>
          <!--      <div  class="header-contents"> <a target="iframe" href="rss.php">BLOG</a> </div> -->
                <div  class="header-contents"> <a target="iframe" href="Deprem-Vikipedi.pdf"><img src="img/blog.svg" width="30px" height="30px" ></a> </div>
        </div>
    </div>
    <div id="right">
        
        <div id="mainContent" class="maintag">
        <iframe id="iframe" name="iframe" src="slice.html" ></iframe> 
            </div>
        <div id="footer" class="maintag">PanTracker  |  Tüm Haklar GLOBIPEDI® Tarafından saklıdır.   </div>
    </div>

<script>
        var b = document.getElementById("list")
b.addEventListener('click', function(){
    var a = document.getElementById("header-list");    
            a.classList.remove('hide');
            a.classList.add('show');
                setTimeout(() => {
                a.classList.remove('show');
                a.classList.add('hide');
            }, 3000);
     });
</script>



</div>
</body>
</html>
