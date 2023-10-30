<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'departamento',
        'bio',
        'web',
        'fotoUrl'
    ];
}
