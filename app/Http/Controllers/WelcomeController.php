<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct(){
        $this->middleware('iplogger');
    }

    function index(){
    	//$name = "Sunmonu-Adedeji Olawale";
    	$data = array('name' => "Sunmonu-Adedeji Olawale",'date' =>date('F d,Y'));
    	return view('home.welcome')->with($data);
    	//return view('home.welcome')->withName($name);
    }
    function arrays(){
    	$lists = array('Vacation Planning','Grocery Shopping','Camping Trip');
    	//$lists = array();
    	return view('arrays')->with('lists',$lists);
    }
}
