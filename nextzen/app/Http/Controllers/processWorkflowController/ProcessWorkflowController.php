<?php

namespace App\Http\Controllers\processWorkflowController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\processWorkflow\ProcessWorkflowModel;

class ProcessWorkflowController extends Controller
{
    /**
    * @method addProcessWorkflow
    * @param nothing
    * @return a view
    */

    public function addProcessWorkflow(){

        return view('admin.processWorkflow.addProcessWorkflow');

    }



     /**
    * @method insertProcessWorkflowAjax
    * @param post request form data
    * @return json alert
    */


    public function insertProcessWorkflowAjax(Request $request){

        $totalPost = ProcessWorkflowModel::where('soft_delete',0)->count();
       
        if($totalPost<3){

        $created_by = Auth::user()->name;

        $attributeNames = array(
            'header'     => $request->header,
            'text'       => $request->text,
            'created_by' => $created_by
        );

        $validator = Validator::make($attributeNames,[
            'header'       => 'required',
            'text'         => 'required',
            'created_by'   => 'required'
        ]);


        if($validator->fails())
        {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));

        }else{
                ProcessWorkflowModel::create($attributeNames);
                return response()->json("Success", 200);
        }

        }else{
             return response()->json("alreadyThree", 200);
        }
    }


    
     /**
    * @method insertProcessWorkflowAjax
    * @param post request form data
    * @return json alert
    */

    public function processWorkflowView(){
        $processWorkflows = ProcessWorkflowModel::where('soft_delete',0)->get();
        $data =[
            'processWorkflows' => $processWorkflows
        ];
       
          return view('admin.processWorkflow.processWorkflowView')->with($data);

    }



     /**
     * @method processWorkflowEditAjax
     * @param post request form data
     * @return json array
     */


    public function processWorkflowEditAjax(Request $request){

       $pWinfo = ProcessWorkflowModel::findOrFail($request->pwfId);
       $data =[
           'pWinfo' =>  $pWinfo
       ];

       return response()->json($data);

    }


     /**
     * @method processWorkflowUpdateAjax
     * @param post request form data
     * @return json alert
     */

    public function processWorkflowUpdateAjax(Request $request){

        $pwInfo = ProcessWorkflowModel::findOrFail($request->pw_id);

         $created_by = Auth::user()->name;

        $attributeNames = array(
            'header'     => $request->header,
            'text'       => $request->text,
            'created_by' => $created_by
        );

        $validator = Validator::make($attributeNames,[
            'header'       => 'required',
            'text'         => 'required',
            'created_by'   => 'required'
        ]);


        if($validator->fails())
        {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));

        }else{
                $pwInfo->update($attributeNames);
                return response()->json("Success", 200);
        }
    }



    /**
    * @method processWorkflowDeleteAjax
    * @param post request pw id
    * @return json alert
    */

    public function processWorkflowDeleteAjax(Request $request){

        $pwInfo = ProcessWorkflowModel::findOrFail($request->id);
        $pwInfo->delete();
        return response()->json('succeess',200);

    }

}
