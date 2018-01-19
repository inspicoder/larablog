<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/blogpost.css')}}" rel="stylesheet">

  </head>

  <body>

    @include('layouts.nav')

    <!-- Page Content -->
    
    <div class="container-fluid">

              <!-- This is the header jumbotron -->
                  <div class="jumbotron jumbotron-fluid">
                      <div class="container">
                        <h1 class="display-4">My Bootstrap Blog</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                      </div>
                  </div>  
      <hr>  
      <div class="container">
          <div class="row">

                <div class="col-lg-8">
                      @yield('content')

                </div>

                <div class="col-lg-4">
                      @include('layouts.sidebar')
                </div>

          </div>
      </div>        

    </div>

    <!-- /.container -->

    @include('layouts.footer')

    @yield('scripts')

  </body>

</html>
