<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleModels;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;


//Utilities
use App\Classes\ImageUploaderUtilities;


class AdminController extends Controller
{
   public function showAddCars(){
       $paraArray   =   [
           'title'  =>  'Add Cars'
       ];
       return view('admin.addcars', $paraArray);
   }

   public function handleAddCars(Request $request){


        $carName                =   ucfirst($request->car_name);
        $brandName              =   $request->brand;
        $image                  =   $request->image;
        $imageName              =   $_FILES['image']['name'][0];
        //$targetDir              =   "../storage/vehicles/";
        $targetDir              =   "assets/images/vehicles/";


        if(!empty($carName) && !empty($brandName) && !empty($image)){
            $uploadStatus   =   ImageUploaderUtilities::imageUpload($targetDir, $_FILES['image']);

            if($uploadStatus == "upload_success"){
                $dataArray  =   ['car_name' => $carName, 'brand'=>$brandName, 'image'=>$imageName,'created_date'=>date('Y-m-d h:i:s')];
                $dataSave   =   VehicleModels::insert($dataArray);

                if($dataSave){
                    $paramArray =   ['success' => 'Data saved successfully'];
                    return Redirect::route('addcars')->with($paramArray);
                }
                else{
                    $paramArray =   ['error' => 'Failed to save data'];
                    return Redirect::route('addcars')->with($paramArray);
                }
            }
            elseif ($uploadStatus == "upload_failed"){
                $paramArray =   ['error' => 'Failed to upload image'];
                return Redirect::route('addcars')->with($paramArray);
            }
            elseif ($uploadStatus == "invalid_image_format"){
                $paramArray =   ['error' => 'Image file format does not support'];
                return Redirect::route('addcars')->with($paramArray);
            }
        }
        else{
            $paramArray =   ['error' => 'Please check the empty fields and try again'];
            return Redirect::route('addcars')->with($paramArray);
        }


   }
}
