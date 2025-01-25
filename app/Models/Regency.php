<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regency extends Model
{
    use HasFactory;

    protected $table = 'regencies';
    protected $fillable = ['name', 'alt_name', 'latitude', 'longitude', 'province_id'];

    public function regencies()
    {
        return $this->hasMany(Province::class, "province_id");
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}


