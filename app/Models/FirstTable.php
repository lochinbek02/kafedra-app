<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstTable extends Model
{
    protected $table='first_table';
    protected $fillable=[
        'faculty','yunalish', 'kurs','talim_tili','semestr','talaba_soni','guruh_soni','patok_soni'
    ];
}
