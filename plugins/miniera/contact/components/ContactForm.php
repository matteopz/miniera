<?php namespace Miniera\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class ContactForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Contact Form',
            'description' => 'Simple contact form'
        ];
    }


    public function onSend(){

        $validator = Validator::make(
            [
                'name' => Input::get('name'),
                'email' => Input::get('email')
            ],
            [
                'name' => 'required',
                'email' >= 'required|email|unique:users'
            ]
        );

        if($validator->false){
            return Redirect::back()->withErrors($validator);
        } else {
            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

            Mail::send('miniera.contact::mail.message', $vars, function($message) {
    
                $message->to('pirolomatteo@gmail.com', 'Admin Person');
                $message->subject('New message from contact form');
    
            });
        }
    }

}