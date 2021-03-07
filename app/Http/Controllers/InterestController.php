<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;

class InterestController extends Controller
{
    public function ReadInterest(){
        //  $services = Services::orderby('id','asc')->select('*')->get(); 
         $interested = Interest::all(); 
         $response['dataInt'] = $interested; 
         return response()->json($response);
       }
}
