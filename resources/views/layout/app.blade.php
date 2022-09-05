<!DOCTYPE html>
<html lang="en">
<head>
    <title>Article</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body>
@include('partials.navbar')
<img src="{{URL::asset('img/2.png')}}" alt="jordan">
@yield('body')
</body>
</html>
