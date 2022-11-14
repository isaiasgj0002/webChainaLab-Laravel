@extends('welcome')
@section('contenido')
<h1 class="titulogh1">Galeria de Imagenes</h1>
<div class="gallery-container">
    <div class="gallery__item">
        <img src="{{asset('images/archivos_galeria/1.jpeg')}}" class="gallery__img">
    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/2.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/3.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/4.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/5.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/6.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/X.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/8.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/jakao.png') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/10.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/10.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/12.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/13.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/14.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/15.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/16.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/1X.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/18.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/19.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/20.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/21.jpeg') }}" class="gallery__img">

    </div>
    <div class="gallery__item">
        <img src="{{ asset('images/archivos_galeria/22.jpeg') }}" class="gallery__img">

    </div>
</div>
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('images/archivos_galeria/1.jpeg') }}" class="modal-img">
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<br>
@endsection
