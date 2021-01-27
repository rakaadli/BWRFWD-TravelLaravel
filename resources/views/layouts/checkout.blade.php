<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    
  </head>
  <body>
    @include('includes.navbar-alternate')    
    @yield('content')
    @include('includes.footer')    

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
=======

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
</head>

<body>
  <!--navbar-->
  @include('includes.navbar-alternate')

  @yield('content')
  
@include('includes.footer')
@stack('prepend-script')
@include('includes.script')
@stack('addon-script')
</body>

>>>>>>> 29ff12519d03a6e3df07352a04477b84292c74fd
</html>