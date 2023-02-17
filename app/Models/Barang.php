<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = ['id'];


    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}