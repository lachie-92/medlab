<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=dropbox-domain-verification content=fs0qd6txxt64 />

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109816292-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109816292-1');
</script>




<!-- App script -->
<script src="/js/all.js"></script>

@yield('custom_script')



</body>

</html>