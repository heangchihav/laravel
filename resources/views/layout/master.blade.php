<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>App | @yield('title')</title>
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 550px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {
        height: auto;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="{{Request::routeIs('dashboard') ? 'active' : '' }}"><a href="{{route('dashboard')}}">Dashboard</a></li>
          <li class="{{Request::routeIs('age') ? 'active' : '' }}"><a href="{{route('age')}}">Age</a></li>
          <li class="{{Request::routeIs('gender') ? 'active' : '' }}"><a href="{{route('gender')}}">Gender</a>
          </li>
          <li class="{{Request::routeIs('geo') ? 'active' : '' }}"><a href="{{route('geo')}}">Geo</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <img src="https://img.freepik.com/free-vector/leaf-maple-icon-logo-design_474888-2154.jpg?size=338&ext=jpg&ga=GA1.1.1224184972.1715457600&semt=sph" alt="">
        <ul class="nav nav-pills nav-stacked">
          <li class="{{Request::routeIs('dashboard') ? 'active' : '' }}"><a href="{{route('dashboard')}}">Dashboard</a></li>
          <li class="{{Request::routeIs('age') ? 'active' : '' }}"><a href="{{route('age')}}">Age</a></li>
          <li class="{{Request::routeIs('gender') ? 'active' : '' }}"><a href="{{route('gender')}}">Gender</a>
          </li>
          <li class="{{Request::routeIs('geo') ? 'active' : '' }}"><a href="{{route('geo')}}">Geo</a></li>
        </ul><br>
      </div>
      <br>
      @yield('content')
    </div>
  </div>
</body>

</html>