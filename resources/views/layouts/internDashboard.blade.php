<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework | DEMO</title>
    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Codebase! You need to purchase a license for legal use! | DEMO">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework | DEMO">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Codebase! You need to purchase a license for legal use! | DEMO">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/media/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&amp;display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset ('/css/codebase.min-4.3.css')}}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-16158021-6"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header page-header-modern main-content-boxed">
        @include('InternDashboard/includes.header');

        <nav id="sidebar">
            @include('InternDashboard/includes.sidebar');
        </nav>

        <main id="main-container" style="margin-bottom: 20px;">

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('failed'))
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @yield('content')
        </main>
        <footer id="page-footer">
            <div class="content py-20 font-size-sm clearfix">
                <div class="float-right">
                    Intern Finder <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">Smart~Gap</a>
                </div>
                <div class="float-left">
                    <a class="font-w600" href="" target="_blank">smartgapict@gmail.com</a> &copy; <span class="js-year-copy"></span>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{asset ('/js/codebase.core.min-4.3.js')}}"></script>
    <script src="{{asset ('/js/codebase.app.min-4.3.js')}}"></script>
</body>

</html>