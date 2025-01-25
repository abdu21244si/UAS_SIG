<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class district extends Model
{
    use HasFactory;

    protected $table = 'districts';
    protected $fillable = ['regency_id', 'name', 'alt_name', 'latitude', 'longitude',];


    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }
}
