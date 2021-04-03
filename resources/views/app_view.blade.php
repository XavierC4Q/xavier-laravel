<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/sass/app.scss" rel="stylesheet">

    <title>Xavier App</title>
</head>

<body class="antialiased">
    <div>
        <div id="app" class="">
            <router-view></router-view>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>