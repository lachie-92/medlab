<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/ico" href="/img/favicon.ico">

    <title>Medlab</title>

    <style>
        body {
            margin: 0;
        }
    </style>

</head>

<body>
    <iframe src="{{ $file_path }}" style="width:100%; height:100vh;" frameborder="0"></iframe>

    <!-- Good Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-72848314-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>


