<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Clothes extends Model
{
    use Notifiable;

    protected $table = 'clothes';
    protected $fillable = [
        'name',
        'price',
    ];
}
