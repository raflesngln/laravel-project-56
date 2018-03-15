<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Belajar laravel</title>
        <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    

<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/js/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </head>
  <body>
  <div class="container-fluid">
  <div class="row">
            <div class="col-sm-12">
            <h1>WELCOME TO LARAVEL LEARNING</h1>
                    @if(isset($title))
                        <h1>{{ $title }}</h1>
                    @endif
            </div>

        <div class="col-sm-12">
            @yield('content')
        </div>

    </div>
</div>
@stack('script')
  </body>
</html>