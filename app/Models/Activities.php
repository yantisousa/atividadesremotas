<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $fillable = ['teacher_id', 'discipline_id', 'name', 'filepath', 'description'];

    public function teacherModel(){
        return $this->hasOne(Teachers::class, 'teacher_id');
    }
}
