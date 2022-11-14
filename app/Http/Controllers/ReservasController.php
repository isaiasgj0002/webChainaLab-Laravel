<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ReservasController extends Controller
{
    public function index(){
        return view('home.reservas');
    }
    public function store( Request $request){
        $reserva = new Reserva;
        $reserva->cliente=$request->input('nombres');
        $reserva->cantidad=$request->input('cantidad');
        $reserva->fecha=$request->input('fecha');
        $reserva->hora=$request->input('hora');
        $reserva->contacto=$request->input('contacto');
        $reserva->Estado='Pendiente';
        $reserva->save();
        Session::flash('succes', 'Se registro tu reserva, para modificar o cancelar, ponganse en contacto usando los siguientes numeros: 984060107');
        return redirect()->route('reservas');
    }
}
