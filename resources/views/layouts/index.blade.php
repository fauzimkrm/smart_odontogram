<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/9.png')}}" />
    @include('layouts/css')
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="app">
        @include('layouts/sidebar')
        <div id="main" class="layout-navbar navbar-fixed">
            @include('layouts/navbar')
            <div id="main-content">
                @yield('content')
                @include('layouts/footer')
            </div>
        </div>
    </div>
    @include('layouts/js')
    @stack('footer_script')
</body>

</html>