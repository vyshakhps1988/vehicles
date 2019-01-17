<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

//Models
use App\Models\VehicleModels;

//Utilities
use App\Classes\ImageUploaderUtilities;


class HomeController extends Controller
{
   public function showHome(){

       $vehicleData =   VehicleModels::get();

       $paraArray   =   [
           'title'          =>  'Home',
           'vehicleData'    =>  $vehicleData
       ];
       return view('home', $paraArray);
   }


}
