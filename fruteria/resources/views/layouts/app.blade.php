<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body style="background: #ad5389;  background: -webkit-linear-gradient(to right, #3c1053, #ad5389); background: linear-gradient(to right, #3c1053, #ad5389); ">

<header class="mb-5">


    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <img class="w-25 h-25 mr-5" src="https://grupofrusur.com/wp-content/uploads/2019/03/logohorizontalmail.jpg" alt="fruteria">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link lead text-white mx-3" href="{{route('landing.index')}}">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lead text-white mx-3" href="{{route('landing.acercade')}}">QUIENES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lead text-white  mx-3" href="{{route('landing.servicios')}}">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lead text-white  mx-3" href="{{route('landing.contacto')}}">CONTACTO</a>
                </li>
            </ul>

        </div>
    </nav>



</header>

@yield('content')

</body>
</html>
