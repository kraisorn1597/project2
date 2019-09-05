<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Promotion extends Model
{
    use Notifiable;
    protected $table = 'promotions';
    protected $fillable = [
        'title',
        'short_description',
        'start_date',
        'end_date',
    ];
}
