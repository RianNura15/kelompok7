<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkModel extends Model
{
    use HasFactory;

    protected $table="produks";
    protected $fillable=['id_produk'];
}
