<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recensement</title>

    <link rel="stylesheet" href="{{ mix("css/app.css") }}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-topnav/>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light" style="font-size: 1.3e;"><b>Recensement</b></span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{ auth()->user()->name}}</a>
                    </div>
                </div>


                <x-menu/>

            </div>

        </aside>

        <div class="content-wrapper">


            <div class="content">
                @yield("content")
            </div>

        </div>


        <x-sidebar/>


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2021-2022 <a href="#">CP</a>.</strong> All rights
            reserved.
        </footer>
    </div>

    <script src="{{ mix("js/app.js") }}"></script>

</body>

</html>