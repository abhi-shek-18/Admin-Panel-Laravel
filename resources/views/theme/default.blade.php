<!doctype html>
<html lang="en">
  <head>
    <title> Admin Dashboard</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('theme/css/styles.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="sb-nav-fixed">

  @include('theme.header')

  <div id="layoutSidenav">
    @include('theme.sidebar')
    <div id="layoutSidenav_content">
      <main>
        @yield('content')
      </main>
      @include('theme.footer')
    </div>
  </div>
      
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="{{asset('theme/js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    
    <script src="{{asset('theme/assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('theme/assets/demo/chart-bar-demo.js')}}"></script>
    <script src="{{asset('theme/assets/demo/chart-pie-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

    <script src="{{asset('theme/assets/demo/datatables-demo.js')}}"></script>
  </body>
</html>