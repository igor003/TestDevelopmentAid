<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--Jquery -->
    <script src="{{asset('bower/jquery/dist/jquery.min.js')}}"></script>
    <!--Bootstrap css -->
    <link href="{{asset('bower/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Bootstrap js -->
    <script src="{{ asset('bower/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</head>
<body>
@section('navbar');
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="#">Link <span class="sr-only"></span></a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>

@show
@section('content');

@show

</body>
</html>
