<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    /** @use HasFactory<\Database\Factories\StudentClassFactory> */
    use HasFactory;
    public function Reports() {
        return $this->hasMany(Report::class)->latest();
    }
    public function LatestReport() {
        return $this->hasOne(Report::class)->latestOfMany();
    }
    public function Teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
