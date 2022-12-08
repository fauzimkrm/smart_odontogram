<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$title}}</title>
    @include('layouts/css')
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
</body>

</html>