<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Batch;
use\Payment;

class Student extends Model
{
    protected $fillable=['batchid','cne','firstName','secondName','age','speciality'];

    public function batch()
    {
         return $this->belongsTo(Batch::class,'batchid');
    }


    protected $fillable1=['name'];

    public function payments()
    {
       return $this->hasMany(Payment::class);
    }
}
