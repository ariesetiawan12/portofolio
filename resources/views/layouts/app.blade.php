```php
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Portfolio Arie Setiawan')
    </title>

    <!-- CSS -->
    <link rel="stylesheet"
          href="{{ asset('css/portfolio.css') }}">

</head>

<body>

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

</body>

</html>
```
