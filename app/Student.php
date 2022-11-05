<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Batch;

class Student extends Model
{
    protected $fillable=['batchid','cne','firstName','secondName','age','speciality'];

    public function batch()
    {
         return $this->belongsTo(Batch::class);
    }
}
