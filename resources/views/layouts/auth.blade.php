<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>

<body class="hold-transition login-page" style="transform: translateY(-80px)">
    <div class="login-box" style="width: 700px">
        <div class="login-logo">
            <a href="../../index2.html" style="font-size: 1.8em;" ><b style="font-weight: bold;">Recensement</b>App</a>
        </div>

        @yield("form")
    </div>


    <script src="{{ mix("js/app.js") }}"></script>
</body>

</html>