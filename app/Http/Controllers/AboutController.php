<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{
    //
    public function create(){
    	return view('about.contact');
    }
    public function store(ContactFormRequest $request){
    	\Mail::send('emails.contact',array('name' =>$request->get('name'),'email'=>$request->get('email'),'user_message'=>$request->get('message')),function($message){
    		$message->from('postmaster@sandbox204697adb09a49cca5dfe37cf4cac30d.mailgun.org');
    		$message->to('ssg315ass@yahoo.com','Wales App') -> subject('Wale App Email');
    	});
    	return \Redirect::route('contact')->with('message','Thanks for contacting us!');
    }
}
