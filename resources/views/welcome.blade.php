<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaina Lab</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos_carta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos_galeria.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-reservar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos_fcontacto.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://file.myfontastic.com/fBbG2MXfBLKEYsNJpastyH/icons.css" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <link href="https://www.dafontfree.net/embed/Y2hpbmFvbmUtbm9ybWFsJmRhdGEvNDUvYy83MDY3MC9DaGluYU9uZS50dGY" rel="stylesheet" type="text/css"/>
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <img src="images/logo.jpeg" class="logo">
            <span class="icon-menu" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu--item"><a class="menu--link" href="{{ route('index') }}">Inicio</a></li>
                    <li class="menu--item"><a class="menu--link" href="{{ route('carta') }}">Nuestra carta</a></li>
                    <li class="menu--item"><a class="menu--link" href="{{ route('galeria') }}">Galeria de imagenes</a></li>
                    <li class="menu--item"><a class="menu--link" href="{{ route('cobtacto') }}">Contacto</a></li>
                    <li class="menu--item"><a class="menu--link" href="{{ route('reservas') }}">Reservas</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('contenido')
    <footer class="footer">
        <div class="wrap-footer">
            <div class="text-element-footer element-footer">
                <h3 class="main-c">Ubicanos</h3>
                <ul>
                    <li>&#9668;Av. Fortunato herrera 204 Urb.Magisterial I etapa Cusco</li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.1898575544988!2d-71.95138688568818!3d-13.523937290495256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916e7f8dc0d40255%3A0x4d70b41da7ec0253!2sChaina%20Lab!5e0!3m2!1ses-419!2spe!4v1664893919449!5m2!1ses-419!2spe" width="300" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="text-element-footer element-footer">
                <h5>Horario de atencion</h5>
                <ul>
                    <li>Lunes a sabado de 12:30 PM a 9:30 PM</li>
                    <li>Domingos de 12:00 PM a 4:00 PM</li>
                </ul>
            </div>
            <div class="text-element-footer element-footer">
                <h5>Contactanos</h5>
                <ul>
                    <li>&#9993;chainalabcusco@gmail.com</li>
                    <li>&#128222;+51 984 060 107</li>
                    <li>&#128222;+51 962 213 653</li>
                </ul>
            </div>
            <div class="rrss-element-footer element-footer">
                <h5>Siguenos</h5>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/chainalabcusco/">
                            <img src="images/social/facebook.png" alt="icono redes sociales">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/chainalab/">
                            <img src="images/social/instagram.png" alt="icono redes sociales">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-creds">
            <div class="copy-creeds">
                <p>@2022 · Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/mostrar.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/fechaactual.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
