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

<!-- Good Analytics -->
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