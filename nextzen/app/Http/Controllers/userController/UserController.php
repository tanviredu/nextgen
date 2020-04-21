<?php

namespace App\Http\Controllers\userController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\slider\SliderModel;
use App\processWorkflow\ProcessWorkflowModel;
use App\futureAndTraining\FutureAndTrainingModel;

class UserController extends Controller
{
     /**
     * @method index
     * index page view
     * @param get request
     * @return with array
     */


    public function index()
    {
        $sliders          = SliderModel::select('slider_text','slider_image')->where('soft_delete',0)->get();
        $processWorkflows = ProcessWorkflowModel::select('header','text')->where('soft_delete',0)->get();
        $futureTrainings  = FutureAndTrainingModel::select('month','from_date','to_date','tropic')->where('soft_delete',0)->get();
        $data = [
            'sliders'            => $sliders,
            'processWorkflows'   => $processWorkflows,
            'futureTrainings'    => $futureTrainings
        ];

        return view('users.index')->with($data);
    }
}
