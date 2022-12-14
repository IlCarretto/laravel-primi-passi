<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            font-size: 1.2rem;
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: unset;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-5">I nostri studenti!</h2>
        <div class="team d-flex justify-content-around">
            <div class="students">
                <h3>Classe 73</h3>
                <ul>
                    @foreach ($socials as $social)
                        <li>{{ $social }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
