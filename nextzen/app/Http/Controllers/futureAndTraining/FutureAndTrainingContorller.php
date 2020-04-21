<?php

namespace App\Http\Controllers\futureAndTraining;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\futureAndTraining\FutureAndTrainingModel;

class FutureAndTrainingContorller extends Controller
{


    /**
    * @method addFutureTrainnings
    * @param nothing
    * @return a form view
    */

    public function addFutureTrainnings(){
        return view('admin.futureAndTrainings.addFutureAndTrainings');
    }



    /**
    * @method insertFutureAndTrainingAjax
    * @param  form data
    * @return alert json
    */

    public function insertFutureAndTrainingAjax(Request $request){

     $created_by = Auth::user()->name;
        $attributeNames = array(
            'month'       => $request->month,
            'from_date'   => $request->from_date,
            'to_date'     => $request->to_date,
            'tropic'      => $request->tropics,
            'created_by'  => $created_by
        );

        $validator = Validator::make($attributeNames,[
            'month.*'             => 'required',
            'from_date.*'         => 'required',
            'to_date.*'           => 'required',
            'tropic.*'            => 'required',
            'created_by.*'        => 'required'
        ]);


        if($validator->fails())
        {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));

        }else{

                for ($i=0; $i < count($request->month); $i++) {
                   $newFutureTrainig                = new FutureAndTrainingModel();
                   $newFutureTrainig->month         = $request->month[$i];
                   $newFutureTrainig->from_date     = $request->from_date[$i];
                   $newFutureTrainig->to_date       = $request->to_date[$i];
                   $newFutureTrainig->tropic        = $request->tropics[$i];
                   $newFutureTrainig->created_by    = $created_by;
                   $newFutureTrainig->save();
                }

                return response()->json("Success", 200);
        }

    }



    /**
    * @method futureTrainingsView
    * @param a collection
    * @return view with collection
    */



    public function futureTrainingsView(){
        $futureAndTrainings = FutureAndTrainingModel::where('soft_delete',0)->get();
        $data = [
            'futureAndTrainings' => $futureAndTrainings
        ];

        return view('admin.futureAndTrainings.futureAndTrainingsView',$data);
    }




    /**
    * @method futureAndTrainingsEdit
    * @param post request data id
    * @return json data
    */



    public function futureAndTrainingsEdit(Request $request){
       $ftInfo = FutureAndTrainingModel::findOrFail($request->id);
       $data   =[
              'ftInfo' => $ftInfo
       ]; 

       return response()->json($data);
    }


    /**
    * @method futureAndTrainingsUpdateAjax
    * @param post request form data with data id
    * @return json alert
    */

    public function futureAndTrainingsUpdateAjax(Request $request){

      $created_by = Auth::user()->name;
      $attributeNames = array(
      'month' => $request->month,
      'from_date' => $request->from_date,
      'to_date' => $request->to_date,
      'tropic' => $request->tropics,
      'created_by' => $created_by
      );

      $validator = Validator::make($attributeNames,[
      'month.*' => 'required',
      'from_date.*' => 'required',
      'to_date.*' => 'required',
      'tropic.*' => 'required',
      'created_by.*' => 'required'
      ]);


      if($validator->fails())
      {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));

      }else{

          $newFutureTrainig             = FutureAndTrainingModel::findOrFail($request->id);
          $newFutureTrainig->month      = $request->month;
          $newFutureTrainig->from_date  = $request->from_date;
          $newFutureTrainig->to_date    = $request->to_date;
          $newFutureTrainig->tropic     = $request->tropics;
          $newFutureTrainig->created_by = $created_by;
          $newFutureTrainig->update();
        
          return response()->json("Success", 200);

          }

    }



     /**
     * @method futureAndTrainingDeleteAjax
     * @param post request data id
     * @return json alert
     */


    public function futureAndTrainingDeleteAjax(Request $request){

        $ftInfo = FutureAndTrainingModel::findOrFail($request->id);
        $ftInfo->delete();
        return response()->json('success');

    }
}
