<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/ico" href="/img/favicon.ico">

    <title>Medlab</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <!-- App CSS -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Research Table CSS & JS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script type="text/javascript" src="/js/jq.tablesort.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">



    <!-- AutoPilot Tracking Code-->
    <script type="text/javascript">(function(o){var b="https://api.autopilothq.com/anywhere/",t="1538831e17534a3ba1cd0c82ef9354e0ba643fcc956741f9862215872f3a93ff",a=window.AutopilotAnywhere={_runQueue:[],run:function(){this._runQueue.push(arguments);}},c=encodeURIComponent,s="SCRIPT",d=document,l=d.getElementsByTagName(s)[0],p="t="+c(d.title||"")+"&u="+c(d.location.href||"")+"&r="+c(d.referrer||""),j="text/javascript",z,y;if(!window.Autopilot) window.Autopilot=a;if(o.app) p="devmode=true&"+p;z=function(src,asy){var e=d.createElement(s);e.src=src;e.type=j;e.async=asy;l.parentNode.insertBefore(e,l);};if(!o.noaa){z(b+"aa/"+t+'?'+p,false)};y=function(){z(b+t+'?'+p,true);};if(window.attachEvent){window.attachEvent("onload",y);}else{window.addEventListener("load",y,false);}})({});</script>

    <!-- Heap Analytics Tracking Code -->
    <script type="text/javascript">
        window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
        heap.load("700872772");
    </script>

    <link rel="stylesheet" type="text/css" href="/css/map-style.css" />
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/map-config.js" type="text/javascript"></script>
    <script src="/js/pin-config.js" type="text/javascript"></script>
    <script src="/js/map-interact.js" type="text/javascript"></script>

</head>

<body>



@include('partial.navigation')

<div class="wrap">

@yield('content')

</div>

@include('partial.footer')

<!-- JQuery -->
<script src="/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap Javascript -->
<script src="/js/bootstrap.min.js"></script>

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72848314-1', 'auto');
    ga('send', 'pageview');

</script>



<!-- App script -->
<script src="/js/all.js"></script>

@yield('custom_script')



</body>

</html>