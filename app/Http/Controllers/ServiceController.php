<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
   public function index(){
        return view('index');
    }

    public function ReadServices(){
        //  $services = Services::orderby('id','asc')->select('*')->get(); 
         $services = Service::all(); 
         $response['data'] = $services; 
         return response()->json($response);
       }
}
