<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <div class="header">
        <h1>Header</h1>
    </div>

    <div class="wp-content">
        <div class="search">
            @section('search')
            <p>Input search </p>
            @show
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="sideBar">
            @yield('sideBar')
        </div>
    </div>
    <div class="footer">
        <h1>footer</h1>
    </div>
</body>

</html>