<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class SiteLogin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'senha',
    ];
}