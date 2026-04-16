<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /** @use HasFactory<\Database\Factories\ReportFactory> */
    use HasFactory;
    protected $appends = ['formatted_date','is_today'];
    public function student_class(){
        return $this->belongsTo(StudentClass::class);
    }
    public function getFormattedDateAttribute(){
        return $this->date ? $this->created_at->toDateString() : null;
    }
    public function getIsTodayAttribute(){
        return $this->formatted_date == now()->toDateString() ? true : false;
    }
}
