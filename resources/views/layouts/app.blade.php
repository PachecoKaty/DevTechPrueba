<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> @yield('title') </title>
</head>
<body>
    <div class="container py-4">
        @if (@session('success'))
            <div class="p-3 mb-2 bg-success text-white text-center">{{session('success')}}</div>
        @endif
        @if (@session('error'))
            <div class="p-3 mb-2 bg-danger text-white text-center">{{session('error')}}</div>
        @endif
        <h2 class="text-center p-4"> @yield('subtitle') </h2>
        @yield('content')
    </div>
</body>
</html>