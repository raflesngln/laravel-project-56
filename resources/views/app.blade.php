<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue CRUD Application</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
        <h1>welcome to laravel and vuejs</h1>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
            Lorem ipsum dolor sit amet
            </div>
        <div>

        </div>
        <script>
           window.Laravel = <?php echo json_encode([
               'csrfToken' => csrf_token(),
                    ]); ?>
          </script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>







