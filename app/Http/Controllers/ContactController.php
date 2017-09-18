<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    
    public function index() {
        return view('contact');        
    }
    
    public function send(Request $request){

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $mesage_user = $request->mesage;
        
        Mail::send('admin.emails.email',
                array('name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'message_user' => $mesage_user),
                function($message){
            $message->from('noreplynvthanh@gmail.com');
            $message->to('noreplynvthanh@gmail.com','Admin')->subject('Contact');
        });
        return Redirect::to('/');
    }

}
