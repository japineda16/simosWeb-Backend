<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order', 'client', 'items', 'time_downloaded', 'process_time', 'bought', 'date_donwloaded'
    ];
}
