<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Vue CRUD Application</title>
        <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="container-fluid">
            <div class="row">
                <h1>Project Learn</h1>
            </div>
            <div id="app">
                <router-view name="companiesIndex"></router-view>
                <router-view></router-view>
            </div>
    </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>