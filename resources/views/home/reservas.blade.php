@extends('welcome')
@section('contenido')
@if(Session::has('succes'))
<div class="alert alert-success alert dismisable fade show mb-4 mt-4" role="alert">
    {{ Session::get('succes') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form action="{{ route('store.reserva') }}" method="POST" class="form-reservas" role="form">
    @csrf
    <h1 class="form-title">Reserva una mesa</h1>
    <p id="nota">Antes de reservar, recuerda que nuestro horario de atencion es: de lunes a sabado de 12:30 PM a 9:30 PM y domingos de 12:00 PM a 4:00 PM</p>
    <div class="container--flex">
        <label class="form--label">Introduce tu nombre</label>
        <input type="text" class="form__input" name="nombres" required>
    </div>
    <div class="container--flex">
        <label class="form--label">Cantidad de personas</label>
        <input type="number" class="form__input" name="cantidad" required min="1">
    </div>
    <div class="container--flex">
        <label class="form--label">¿Para que día?</label>
        <input type="date" class="form__input" name="fecha" required id="datefield">
    </div>
    <div class="container--flex">
        <label class="form--label">¿A que hora?</label>
        <input type="time" class="form__input" name="hora" required min="12:30" max="21:30">
    </div>
    <div class="container--flex">
        <label class="form--label">Numero de telefono o correo electronico para contactarte</label>
        <input type="text" class="form__input" name="contacto" required>
    </div>
    <input type="submit" class="form--submit" value="Reservar">
</form>
<br>
@endsection
