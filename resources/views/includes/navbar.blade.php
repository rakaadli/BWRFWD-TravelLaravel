<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a href="#" class="navbar-brand">
      <img src="{{url('frontend/images/logo.png')}}" alt="logo nomads">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon">
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a href="#" class="nav-link active">HOME</a>
          </li>
          <li class="nav-item mx-md-2">
            <a href="details.html" class="nav-link">PAKET TRAVEL</a>
          </li>
          <div class="li nav-item dropdown"><a href="#" id="navbardrop" class="nav-link dropdown toggle"
              data-toggle="dropdown">
              SERVICES
            </a>
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Link</a>
              <a href="#" class="dropdown-item">Link</a>
              <a href="#" class="dropdown-item">Link</a>
            </div>
          </div>
          <li class="nav-item mx-md-2">
            <a href="details.html" class="nav-link">TESTIMONIAL</a>
          </li>
        </ul>

       @guest 
        <!--Mobile Button-->
        <form action="" class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
            LOGIN
          </button>
        </form>
        <!--Desktop Button-->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
            LOGIN
          </button>
        </form>
        @endguest

        @auth
        <!--Mobile Button-->
      <form action="{{url('logout')}}" class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
        @csrf
        <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">
            LOGOUT
          </button>
        </form>
        <!--Desktop Button-->
        <form action="{{url('logout')}}" class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
          @csrf
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
            LOGOUT
          </button>
        </form>
        @endauth
      </div>
    </nav>
  </div>