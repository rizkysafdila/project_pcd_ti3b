<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/svg/logo.svg') }}" type="image/x-icon">

  {{-- Core Bootsrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- Datatables Style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="layer"></div>
  <!-- ! Body -->
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">
    <!-- ! Sidebar -->
    @include('dashboard.partials.sidebar')
    <div class="main-wrapper">
      <!-- ! Main nav -->
      @include('dashboard.partials.navbar')
      <!-- ! Main -->
      <main class="main users chart-page" id="skip-target">
        @yield('content')
      </main>
      <!-- ! Footer -->
      @include('dashboard.partials.footer')
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
  <!-- Chart library -->
  <script src="{{ asset('plugins/chart.min.js') }}"></script>
  
  <!-- Icons library -->
  <script src="{{ asset('plugins/feather.min.js') }}"></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
  <!-- Datatables JS -->
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

  <!-- Custom scripts -->
  <script src="{{ asset('js/script.js') }}"></script>
  
</body>

</html>
