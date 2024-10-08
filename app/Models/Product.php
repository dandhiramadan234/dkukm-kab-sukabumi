<?php

namespace App\Models;

use App\Models\Umkm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $guarded = [];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
