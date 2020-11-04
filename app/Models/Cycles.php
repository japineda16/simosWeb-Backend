<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycles extends Model
{
    use HasFactory;

    protected $fillable = [
        'cycles', 'nro_invoices', 'nro_orders', 'nro_last_invoice', 'waiting', 'to_be_downloaded',
        'ped_fact', 'ped_Despac'
    ];
}
