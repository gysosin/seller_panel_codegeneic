<?php

namespace App\Models;
use Illuminate\Support\Facades\Session;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'country',
        'state',
        'city',
        'fname',
        'ppancard',
        'cpancard',
        'gstin',
        'firmname',
        'adhar',
        'btype',
        'pincode',
        'faddress',
        'bankacc',
        'bankifsc',
    ];
}
