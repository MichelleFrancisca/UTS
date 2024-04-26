<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'Code',
        'Name',
        'Email',
        'Phone',
        'Mobile',
        'Street',
        'City',
        'State',
        'Zip',
        'Country',
        'VAT',
    ];
}