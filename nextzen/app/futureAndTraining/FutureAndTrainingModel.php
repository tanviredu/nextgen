<?php

namespace App\futureAndTraining;

use Illuminate\Database\Eloquent\Model;

class FutureAndTrainingModel extends Model
{
    protected $table  = 'future_and_trainings_table';
    protected $fillable =[
         'month',
         'from_date',
         'to_date',
         'tropic',
         'created_by',
         'status',
         'soft_delete'
    ];
   
}
