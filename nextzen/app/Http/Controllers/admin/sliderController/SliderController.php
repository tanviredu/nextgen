<?php

namespace App\Http\Controllers\admin\sliderController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\slider\SliderModel;

class SliderController extends Controller
{


    /**
    * @method addSlider 
    * Show the a view of add slider page
    * @param nothing
    * @return  View
    */



    public function addSlider()
    {
        return view('admin.slider.addSlider');
    }




    /**
    * @method sliderInsertAjax
    * insert slider image
    * @param post request dadta
    * @return json
    */

    public function sliderInsertAjax(Request $request)
    {
          $created_by = Auth::user()->name;

          $image = $request->file('image');
          if (isset($image))
          {
                // make unique name for image
                $currenttime = Carbon::now()->toDateString();
                $imagename =$currenttime.'-'.uniqid().'.'.$image->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('slider'))
                {
                Storage::disk('public')->makeDirectory('slider');
                }
                // image resize for slider
                $resizeimage = Image::make($image)->resize(1920,1280)->save($imagename);
                Storage::disk('public')->put('slider/'.$imagename,$resizeimage);

          }else{

                $imagename = 'default.png';

          }

       

        $attributeNames = array(
            'slider_text'  => $request->slider_text,
            'slider_image' => $imagename,
            'created_by'   => $created_by
        );

        $validator = Validator::make($attributeNames,[
            'slider_text'  => 'required',
            'slider_image' => 'required',
            'created_by'   => 'required'
        ]);




        if($validator->fails())
        {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));

        }else{
                SliderModel::create($attributeNames);
                return response()->json("Success", 200);
        }
        
    }




    /**
    * @method sliderView
    * slider view
    * @param get request 
    * @return an array
    */


    public function sliderView()
    {
        $sliders = SliderModel::where('soft_delete',0)->get();
        $data   = [
            'sliders' => $sliders
        ];

        return view('admin.slider.sliderView')->with($data);

    }



    /**
    * @method sliderEditAjax
    * slider edit data return
    * @param post request 
    * @return json array
    */


    public function sliderEditAjax(Request $request){

        $slider = SliderModel::findOrFail($request->sliderId);

        $data = [ 
             'slider' => $slider
        ];

        return response()->json($data);

    }


    
    /**
    * @method sliderUpdateAjax
    * slider update 
    * @param post request 
    * @return json array
    */

    public function sliderUpdateAjax(Request $request){

       $sliderInfo = SliderModel::findOrFail($request->slider_id);
       $created_by = Auth::user()->name;
       
       if($request->file('image')){
                $image = $request->file('image');

            // make unique name for image
                $currenttime = Carbon::now()->toDateString();
                $imagename =$currenttime.'-'.uniqid().'.'.$image->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('slider'))
                {
                Storage::disk('public')->makeDirectory('slider');
                }
                // image resize for slider
                $resizeimage = Image::make($image)->resize(1920,1280)->save($imagename);
                Storage::disk('public')->put('slider/'.$imagename,$resizeimage);

                if (Storage::disk('public')->exists('slider/'.$sliderInfo->slider_image)){
                Storage::disk('public')->delete('slider/'.$sliderInfo->slider_image);
            }


       }else{
          $imagename  = $sliderInfo->slider_image;
       }

       $attributeNames = array(
            'slider_text'  => $request->slider_text,
            'slider_image' => $imagename,
            'created_by'   => $created_by
        );

        $validator = Validator::make($attributeNames,[
            'slider_text'  => 'required',
            'slider_image' => 'required',
            'created_by'   => 'required'
        ]);


        if($validator->fails())
        {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));

        }else{
                 $sliderInfo->update($attributeNames);
                return response()->json("Success", 200);
        }

    }



    /**
    * @method sliderDeleteAjax
    * slider delete 
    * @param post request by slider id
    * @return json alert
    */

    public function sliderDeleteAjax(Request $request)
    {
        $sliderInfo = SliderModel::findOrFail($request->sliderId);

         if (Storage::disk('public')->exists('slider/'.$sliderInfo->slider_image)){
                Storage::disk('public')->delete('slider/'.$sliderInfo->slider_image);
            }

        $sliderInfo->delete();    

        return response()->json('success');
    }


}
