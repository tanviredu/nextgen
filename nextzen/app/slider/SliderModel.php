<?php

namespace App\slider;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
   protected  $table = 'slider_table';
   protected  $fillable =[
    'slider_text',
    'slider_image',
    'created_by',
    'soft_delete'
   ];

}
