<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'reservations';

    protected $fillable = [
        'type',
        'persons',
        'date',
        'time',
        'firstname',
        'lastname',
        'email',
        'phone_number',
        'comments',
        'advertising'
    ];
}
