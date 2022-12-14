<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        li {
            list-style: none;
            font-size: 1.6rem;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: unset;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="text-center">{{ $pageTitle }}</h1>
            <div class="header-menu">
                <ul class="d-flex justify-content-around mt-5">
                    @foreach ($menuItems as $item)
                        <li>
                            <a href="{{ $item['hrefItem'] }}">
                                {{ $item['menuItem'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </header>
</body>

</html>
