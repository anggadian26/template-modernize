<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template Modernize </title>
    @include('link.head')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('partials.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Navbar Start -->
            @include('partials.navbar')
            <!--  Navbar End -->
            <div class="container-fluid">

                {{-- Content --}}
                @yield('content')
                {{-- Content --}}
                
                {{-- Footer --}}
                @include('partials.footer')
                {{-- end Footer --}}
            </div>
        </div>
    </div>
    @include('link.script')
</body>

</html>
