@extends('welcome')
@section('contenido')
<section class="pcontenedor">
    <div class="parallax">
        <div class="descripcion">
            <h1>Nuestro menu</h1>
            <p>Aquí les presentamos nuestra carta, cada plato es una explosión de sabores. Atrevete a vivir la experiencia Chaina.</p>
        </div>
    </div>
</section>
<section class="wrap">
    <div class="wrap-title-section">
        <h2>Siu mai(4 unid)</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/siumai.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Siu Mai Clasico</h4>
                <p>Relleno de langostino, pollo, cerdo y hongo fonku acompañado de nuestra salsa hoisin.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/siumaivegetariano.PNG') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Siu Mai Vegetariano</h4>
                <p>Relleno de verduras, hongo tonku y quinoa, acompañados de nuestra salsa hoisin.</p>
            </div>
        </div>
    </div>
    <div class="wrap-title-section">
        <h2>Rollitos primavera(4 unid)</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/rollitosprimavera.PNG') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Rollitos primavera Clasicos</h4>
                <p>Rellenos de cerdo, pollo y verduras salteadas, acompañados de nuestra salsa lee.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/rollitosprimaveravegetariano.PNG') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Rollitos primavera Vegetarianos</h4>
                <p>Rellenos de verduras salteadas al wok y hongo tonku con salsa lee.</p>
            </div>
        </div>
    </div>
    <div class="wrap-title-section">
        <h2>Los clasicos</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/c-1.png') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Sopa Chaina Lab</h4>
                <p>Pollo, cha siu, langostinos, huevo de codorniz, wantan y verduras chinas.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/tallarin.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Tallarin saltado</h4>
                <p>Jugosos tallarines con huevo de codorniz, col china, holantao, pimentó, wanyi y frejol chino.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/chaufa.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Arroz Chaina Frito</h4>
                <p>Salteado al wok, huevo, cebolla china y kion.</p>
            </div>
        </div>
    </div>
    <div class="wrap-title-section">
        <h2>Wantan(6 UNID.)</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/wantan.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Wantan Clasico</h4>
                <p>Rellenos de pollo, cerdo y castaña de agua, acompañados de nuestra salsa tamarindo Lab.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/wantanvgPNG.PNG') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Wantan Vegetariano</h4>
                <p>Rellenos de vegetales salteados, acompañados de nuestra salsa tamarindo Lab.</p>
            </div>
        </div>
    </div>
    <div class="wrap-title-section">
        <h2>Especiales Chaina</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/jakao.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Ja Kao Lab</h4>
                <p>Relleno con langostinos y brotes de bambu, acompañados de nuestra salsa hoisin.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/minpao.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Chaina Min pao</h4>
                <p>Panecillos al vapor rellenos de cha siu, acompañados de nuestra salsa hoisin Lab.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/bao.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Chaina Bao</h4>
                <p>Butifarras rellenas de cha siu, encurtido y chips crocantes.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/langostinosr.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Langostinos rellenos</h4>
                <p>Rellenas de pollo, cerdo y frutos secos empanizados con panko, acompañados de nuestra salsa lee.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/chicharron.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Chicharron de pollo</h4>
                <p>Jugosos muslitos de pollo, acompañados de una salsa(limon con canela china) y encurtido de estacion.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/alitas.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Alitas Chaina</h4>
                <p>Alitas de pollo crocante, bañadas con nuestra salsa orientan chaina.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/dumplings.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Dumplings al vapor</h4>
                <p>Rellenos de pollo, cerdo y castaña de agua, sellada y laqueada con nuestra salsa de la casa.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/tbao.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Taco Bao</h4>
                <p>Pollo, col china, tonku y palta servido con una salsa ligeramente picante.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/salad.PNG') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Ensalada Chaina</h4>
                <p>Mix de lechuga, langostinos, palta, mango, tomates cherry, holantao, tonku con salsa vinagreta de sauco.</p>
            </div>
        </div>
    </div>
    <div class="wrap-title-section">
        <h2>Combos Chaina</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">

            </div>
            <div class="title-plato-carta">
                <h4>Combo #1</h4>
                <p>2 Siu mai clasico, 2 min pao, 2 wantan clasico, 2 rollitos primavera clasico.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">

            </div>
            <div class="title-plato-carta">
                <h4>Combo #2</h4>
                <p>4 Langostinos, 4 rollitos primavera clasicos, 4 alitas chaina, 4 wantan clasico.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">

            </div>
            <div class="title-plato-carta">
                <h4>Combo Banquete</h4>
                <p>6 alitas chaina, 6 min pao, 6 chicharron pollo, 6 langostinos rellenos, 6 wantan clasico, 1 Porc. Encurtido de casa.</p>
            </div>
        </div>
        <div class="plato-carta">
            <div class="img-plato-carta">

            </div>
            <div class="title-plato-carta">
                <h4>Combo vegetariano</h4>
                <p>3 rollitos primavera vegetariano, 3 siu mai vegetariano, 3 wantan vegetariano.</p>
            </div>
        </div>
    </div>
    <div class="wrap-title-section">
        <h2>Guarniciones</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">

            </div>
            <div class="title-plato-carta">
                <h4>Encurtidos de la estacion</h4>
                <p>Porcion.</p>
            </div>
        </div>
    </div>
    <div class="wrap-title-section">
        <h2>Postre</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/postre.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Min pao dulce</h4>
                <p>Relleno de crema pastelera con chocolate, sal de maras, sobre una cama de coulis de kion con fresa y helado de temporada.</p>
            </div>
        </div>
    </div>
    <div class="wrap-title-section">
        <h2>Especial de los fines de semana</h2>
    </div>
    <div class="wrap column-2 carta">
        <div class="plato-carta">
            <div class="img-plato-carta">
                <img src="{{ asset('images/menu_imagenes/pato.jpeg') }}">
            </div>
            <div class="title-plato-carta">
                <h4>Pato asado cantones al cilindro</h4>
                <p>Delicioso pato asado acompañado de arroz chaina, tortillas Bao al vapor y encurtido de estacion.</p>
            </div>
        </div>
    </div>
</section>
<br>
@endsection
