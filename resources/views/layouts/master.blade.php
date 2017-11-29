<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ouvidoria</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="col-md-10 col-md-offset-1" align="center">
        @include('layouts.partials.errors')
        @include('layouts.partials.alert-info')
        @include('layouts.partials.success-alert')
    </div>

    @yield('content')
</body>
</html>
