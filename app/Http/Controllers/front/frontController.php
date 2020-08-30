<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('front.index');
    }// End of index


    public function about(){
        return view('front.about');
    } // End of about

     public function team(){
        return view('front.team');
    } // End of team

     public function services(){
        return view('front.services');
    } // End of services


    public function contact(){
        return view('front.contact');
    } // End of contact

    public function project(){
        return view('front.project');
    } // End of project

} // End of controller
