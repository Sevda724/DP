<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\config\Mail; 


class ContactFormController extends Controller
{
    public function contactForm()
    {
        return view("index");


    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        \Mail::send('contactMailTemplate', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'mess' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('190103364@stu.sdu.edu.kz', 'Admin')->subject($request->subject);
        });

        \Mail::send('thanks', array(
            'name' => $input['name'],
            'email' => $input['email'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to($request->input('email'))->subject('Kazakhfilm');
        });
        return redirect()->to(url()->previous())->withFragment('contact');
    }
}