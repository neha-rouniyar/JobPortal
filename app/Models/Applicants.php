<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;
    public function jobs()
    {
        return $this->belongsTo(Jobs::class,'job_id');
    }
}
