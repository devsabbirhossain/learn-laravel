<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
{{--    @vite(['resources/css/app.css'])--}}
</head>
<body>
    <div class="wrap-profile">
        <h2>Profile: {{ $id }}</h2>
        <h3>Page: {{ $page }}, Order: {{ $orderBy }}</h3>
    </div>
</body>
</html>
