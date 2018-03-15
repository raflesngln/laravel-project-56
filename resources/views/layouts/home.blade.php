<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Belajar laravel</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
  <div class="container-fluid">
        <p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
        <div class="row">
            <div class="col-sm-3 col-md-6 bg-primary">.col-sm-3</div>
            <div class="col-sm-3 col-md-6 bg-success">.col-sm-3</div>
            <div class="col-sm-3 col-md-6 bg-warning">.col-sm-3</div>
            <div class="col-sm-3 col-md-6 bg-danger">.col-sm-3</div>
            <div class="col-sm-12">
                    @if(isset($title))
                        <h1>{{ $title }}</h1>
                    @endif
            </div>
        </div>

        <div class="container">
            @yield('content')
        </div>
    </div> <!-- /container -->
    <!--  Load jquery cdn  -->
<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('datatables/js/dataTables.bootstrap.js') }}"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery-3.1.1.js"></script> -->
<!--  Load bootstrap.js  -->
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>