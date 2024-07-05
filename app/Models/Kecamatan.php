<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kecamatans';

    protected $guarded = [];

    public function scopeSearch($query, $term)
    {
        return $query->where(function ($query) use ($term) {
            $query
                ->where('kecamatan', 'like', '%' . $term . '%');
        });
    }
}
