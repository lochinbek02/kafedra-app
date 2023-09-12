<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTable extends Model
{
    protected $fillable = ['rasm', 'title', 'content'];
}
