<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blabla...</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <script>

        window.laravel = { csrfToken: '{{ csrf_token() }}' }
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
</head>

<body class="pt-5">
    <div id="app">
        <div class="container">
            <div class="row">
                <Mysidebar></Mysidebar>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <router-view></router-view>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
