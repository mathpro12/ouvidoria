<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ouvidoria</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="col-md-11 col-md-offset-2">
        @include('layouts.partials.errors')
        @include('layouts.partials.alert-info')
        @include('layouts.partials.success-alert')
    </div>

    @yield('content')
</body>
</html>
