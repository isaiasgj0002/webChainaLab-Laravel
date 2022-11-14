@extends('welcome')
@section('contenido')
<div class="banner">
    <img src="{{ asset('images/banner2_auto_x2_colored_toned_light_ai.jpg') }}">
    <div class="contenedor">
        <h1 class="banner__titulo" id="titulo">¡Disfruta la experiencia Chaina!</h1>
        <p class="banner__txt" id="desc">"Dim Sum & Salón de té. Servicio top & buena música★"</p>
        <a href="{{ route('carta') }}" id="buttonmenu" target="_self">Ver menu</a>
    </div>
</div>
<main class="main">
    <section class="wrapper">
        <div class="rowed">
            <div class="image--section">
                <img src="{{ asset('images/aboutus.jpeg') }}">
            </div>
            <div class="contendaboutus">
                <h1>Sobre nosotros</h1>
                <h2>Nuestro restaurant</h2>
                <p style="color: #000">Somos un laboratorio de comida china, nuestra especialidad son los dim sum, conocidos como bocatidos chinos, nos encanta ver a la gente feliz luego de tener la experiencia en nuestro restaurante. Gracias a nuestro equipo en cocina que son alquimistas de la comida china. Estamos muy agradecidos con toda la gente que nos acompaña cada día.</p>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="contenedor">
            <article class="info--columna animado">
                <img src="{{ asset('images/jakao.png') }}" class="info--img">
                <h2 class="infotitulo">Ja kao Lab</h2>
                <p class="info--txt">Rellenos con langostinos y brotes de bambu acompañados de nuestra salsa hoisin</p>
            </article>
            <article class="info--columna animado">
                <img src="{{ asset('images/siumai.png') }}" class="info--img">
                <h2 class="infotitulo">Siu Mai clasico</h2>
                <p class="info--txt">Relleno de langostino, pollo, cerdo y hongo tonku acompañado de nuestra salsa hoisin</p>
            </article>
            <article class="info--columna animado">
                <img src="{{ asset('images/minpao.png') }}" class="info--img">
                <h2 class="infotitulo">Chaina Min Pao</h2>
                <p class="info--txt">Panecillos al vapor rellenos de cha siu, acompañado de nuestra salsa hoisin Lab</p>
            </article>
        </div>
    </section>
    <section class="scomen">
        <div class="contenedor">
            <h2 class="comen__titulo">Opiniones de nuestros clientes</h2>
            <p class="comen__txt">Comensales viviendo la espectacular experiencia en Chaina Lab. Somos apacionados por brindarles un servicio con los mas altos estandares de calidad.</p>
            <div class="comentarios__columna animado">
                <img src="{{ asset('images/c_1.png') }}" class="imagesimg">
                <p>"Excelente atencion por los dueños, la bebida de frambuesa  de la casa deliciosa,  los dim sum los mejores y el chaufa es el mejor que he comido aqui en Cusco, un lugar para recomendar y regresar, muchas gracias chicos😊🤗"</p>
            </div>
            <div class="comentarios__columna animado">
                <img src="{{ asset('images/c_2.png') }}" class="imagesimg">
                <p>"Una de las mejores recomendaciones que me han dado, el lugar es confortable, los platillos una delicia y la atención 100% profesional y personalizada. Si viajas al cuzco, no puedes dejar de visitarlos."</p>
            </div>
            <div class="comentarios__columna animado">
                <img src="{{ asset('images/c_3.PNG') }}" class="imagesimg">
                <p>"¿Comida china en Perú? - ¡¡Absolutamente!! Nos topamos con Chaina Lab por accidente y quedamos simplemente asombrados: excelente comida, servicio súper amable y un ambiente hermoso. ¡Solo podemos recomendarlo y volveríamos una y otra vez!"</p>
            </div>
            <div class="comentarios__columna animado">
                <img src="{{ asset('images/c_4.png') }}" class="imagesimg">
                <p>"Bocaditos súper ricos, lo mejor la combinación de las salsas con cada platillo, una de las comidas mas ricas que probaras en Cusco, 100% recomendado, también una atención excelente, gracias!"</p>
            </div>
        </div>
    </section>
</main>
@endsection
