<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_Lelang extends Model
{
    use HasFactory;
    protected $table = 'history_lelang';
    protected $guarded = ['id'];
}
