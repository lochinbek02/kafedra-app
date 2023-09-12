<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'maqolalar_soni', 'tezis_soni', 'ilmiy_kitoblar_soni','unvon','mutaxasisligi','year'];
    
}
