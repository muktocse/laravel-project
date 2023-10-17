
<!DOCTYPE html>
<html lang="en">
<head>
    @include('included.header')
</head>
<body class="sb-nav-fixed">
@include('included.nav')
<div id="layoutSidenav">
    @include('included.sidebar')
    <div id="layoutSidenav_content">
        <main>
            @yield('body')
        </main>
        @include('included.footer')
    </div>
</div>
@include('included.script')
</body>
</html>


