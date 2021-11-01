<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/image/logo/deedthrone.jpg">
    <link rel="stylesheet" href="css/partials/sidebar.css">
    <link rel="stylesheet" href="css/partials/navigationbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Project UTS | Dashboard</title>
  </head>
  <body>

  <header>
  @include('partials.sidebar') 
  </header>
  
  <div class="main">
    @yield('home')
</div>




  </body>
</html>
