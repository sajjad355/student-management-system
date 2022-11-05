<?php

namespace App;
use APP\Student;
use App\Batch;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function student()
    {
         return $this->belongsTo(Student::class,'studentid');
    }

}
