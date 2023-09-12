<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdTable extends Model
{
    protected $table='third1_table';
    protected $fillable=[
        'faculty','yunalish', 'kurs','talim_tili','semestr','code','title_subject','sinov_imtihon','kredit','soat','jami','lecture','practical','labs','seminar','kurs_ishi','malakaviy_amaliyot','mustaqil_talim'
    ];
}
