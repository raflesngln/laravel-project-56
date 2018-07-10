<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Laravel Vue CRUD Application</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="container-fluid">
            <div class="row">
                <h1>Project Learn</h1>
            </div>

            <div class="container">
                @yield('content')
            </div>
    </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>