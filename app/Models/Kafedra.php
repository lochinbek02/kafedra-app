<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kafedra extends Model
{
    protected $fillable = ['name', 'lastname', 'email', 'phone'];
}
