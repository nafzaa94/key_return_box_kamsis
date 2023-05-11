<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addcard extends Model
{
    use HasFactory;

    protected $table = 'addcards';

    protected $fillable = [
        'fullname',
        'cardnumber',
        'block',
        'status',
    ];
}
