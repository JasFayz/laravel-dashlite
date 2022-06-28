<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/assets/css/theme.css') }}">
</head>
<body class="nk-body npc-default has-apps-sidebar has-sidebar no-touch nk-nio-theme">
    <div id="app">
        <app />
    </div>
    <script src="{{ asset('/assets/js/bundle.js')}}"></script>
    <script src="{{ asset('/assets/js/scripts.js') }}"></script>
    <link rel="stylesheet" href="./assets/css/editors/quill.css?ver=2.9.1">
    <script src="{{ asset('/assets/js/libs/editors/quill.js') }}"></script>
    <script src="{{ asset('/assets/js/editors.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
