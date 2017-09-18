<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Mail;
use App\Mail\Contact;
/**
 * Description of SendMailController
 *
 * @author hanh
 */
class SendMailController extends Controller {
    
    public function sendMail(){
        
        $emailFrom = 'nguyenhanhbkdn@gmail.com';
        $content = [
            'title' => 'Hello',
            'message' => 'This is an email'
        ];
        
        $emailTo = 'noreplynvthanh@gmail.com';
        
        Mail::to($emailTo)
                ->cc($emailFrom)
                ->send(new Contact($content));
        dd('Successfully!');
    }
}
