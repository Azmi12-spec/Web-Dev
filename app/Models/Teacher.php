<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'niy', 'subjects_id', 'start_date'];
    protected $with = ['subjects'];

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'subjects_id');
    }
}

