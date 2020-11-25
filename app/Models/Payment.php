<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'cash', 'multipago', 'wire_transfer', 'zelle', 'amount_zelle',
        'amount_transfer', 'amount_multipago'
    ];
}
