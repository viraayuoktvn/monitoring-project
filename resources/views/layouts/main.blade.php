<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{ $title }}</title>
  </head>
  <body>

      @include('partials.navbar')
      @include('partials.sidebar')

      <div class="container mt-7" id="main-content">
          @yield('content')
      </div>

      <script>
        // event will be executed when the toggle-button is clicked
        document.getElementById("btn-toggle").addEventListener("click", () => {
  
          // when the button-toggle is clicked, it will add/remove the active-sidebar class
          document.getElementById("sidebar").classList.toggle("active-sidebar");
  
          // when the button-toggle is clicked, it will add/remove the active-main-content class
          document.getElementById("main-content").classList.toggle("active-main-content");
        });
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>