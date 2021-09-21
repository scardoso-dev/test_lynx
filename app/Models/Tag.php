<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function scopeCovid($query) {
        return $query->where('name', '=', 'covid');
    }
    
    public function scopeParis($query) {
        return $query->where('name', '=', 'paris');
    }

    public function scopeAmis($query) {
        return $query->where('name', '=', 'amis');
    }

    public function scopeTravail($query) {
        return $query->where('name', '=', 'travail');
    }

}
