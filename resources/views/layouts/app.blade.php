<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php exercises</title>

  
    {!! Html::style('css/bootstrap.css') !!}
      <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
   {!! Html::style('css/app.css') !!}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
           
                @section('header_nav')
                    @include('partials._nav_bar_header')
                @endsection
                @yield('header_nav')      
            </div>
        </div>
<div class="row">
    <div class="col-md-2 container-fluid" style="float:left">
        <div id="sidebar">
            <!-- aqui el partial -->
           <!-- @yield('sidebar') -->
          @section('sidebar_left')
            @include('partials._lessons_menu')
            @yield('sidebar_left')
          @endsection

        </div>
    </div>

    <div class="col-md-8 container-fluid">
        <div id="content">
            @yield('content')
          
        </div>
    </div>

    <div class="col-md-2 container-fluid" style="float:left">
        <div id="sidebar">
            <!-- aqui el partial -->
           <!-- @yield('sidebar') -->
           @section('sidebar_right')
            @include('partials._exercises_menu')
            @yield('sidebar_right')
           @endsection  
        </div>
    </div>



</div>
 

    </div>

      <div id="footer">
       
          @yield('footer')
        </div>
    </div>
</div>

  <!-- Jquery CDN -->
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    @yield('scripts')
</body>
</html>