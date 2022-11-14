@extends('welcome')
@section('contenido')
<form action="enviar.php" method="post">
    <h2 class="titleh2">Contactanos</h2>
    <div class="form-group">
        <label><b>Introduce tu nombre</b></label>
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre" required>
    </div>
    <div class="form-group">
        <label><b>Introduce tu telefono</b></label>
        <input type="tel" class="form-control" name="Telefono" placeholder="Telefono" required>
    </div>
    <div class="form-group">
        <label><b>Introduce tu correo</b></label>
        <input type="email" class="form-control" name="Correo" placeholder="Correo" required>
    </div>
    <div class="form-group">
        <label><b>Tu mensaje</b></label>
        <textarea name="mensaje" class="form-control" placeholder="Escriba un mensaje" required></textarea>
    </div>
    <br>
   <div class="form-group">
    <input type="submit" class="form-control" value="Enviar" id="boton">
   </div>
</form>
<br>
@endsection
