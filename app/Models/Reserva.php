<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //use HasFactory;
    protected $table="t_reservas";
    protected $primarykey = "id";
    protected $fillable = [
        'cliente','cantidad','fecha','hora','contacto','Estado'
    ];
    public $timestamps = false;
}
