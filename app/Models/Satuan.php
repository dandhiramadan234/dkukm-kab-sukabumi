<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Satuan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'satuans';

    protected $guarded = [];

    public function scopeSearch($query, $term)
    {
        return $query->where('description', 'like', '%' . $term . '%');
    }
}
