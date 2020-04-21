<?php

namespace App\Http\Controllers\nextTraining;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NextTrainingController extends Controller
{

    /**
    * @method addNextTraining
    * @param nothing
    * @return a form view
    */

    public function addNextTraining(){
        return view('admin.nextTraining.addnextTraining');
    }



}
