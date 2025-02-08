<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content ="{{csrf_token()}}">
    <title>@yield('title', 'Hellena Painting')</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="sb-nav-fixed">
    @include('home.homecss')
    <!-- Include Navbar -->
    @include('home.header')

    <!-- Layout Main Content -->
    

        <!-- Main Content Area -->
        <div id="layoutSidenav_content">
            <main>
                @yield('content')  <!-- Where the page-specific content will go -->
            </main>
        </div>
    </div>

    <!-- Include Footer -->
    @include('home.footer')

    <!-- Scripts -->
  
</body>
</html>
