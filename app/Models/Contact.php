<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone_number',
        'subject',
        'text',
    ];
}
