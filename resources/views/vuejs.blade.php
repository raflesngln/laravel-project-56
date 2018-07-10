<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue CRUD Application</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
	<section class="content">
            <div id="app">
                    <div class="col-sm-12">
                        <router-view name="Index"></router-view>
                        <router-view name="list"></router-view>
                        <router-view></router-view>
                    </div>
            </div>
	</section>

        <script src="{{mix('js/vuejs.js')}}"></script>
    </body>
</html>