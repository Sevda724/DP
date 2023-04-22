<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\config\Mail;
use Illuminate\Support\Facades\Validator;


class ContactFormController extends Controller
{
    public function contactForm()
    {
       return redirect()->to(url()->previous())->withFragment('contact');


    }

    public function storeContactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'], [
        'name.required' => __('local.Please enter your name.'),
        'email.required' => __('local.Please enter your email address.'),
        'email.email' => __('local.Please enter a valid email address.'),
        'subject.required' => __('local.Please enter a subject for your message.'),
        'message.required' => __('local.Please enter a message.'),

        ]);

        if ($validator->fails()) {
        return redirect()
        ->back()
        ->withInput()
        ->withErrors($validator)
        ->with('status-mess-err', __('local.All fields must be filled in!'))
        ->withFragment('contact');
        }

        $validator->validate();

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

        /*\Mail::send('thanks', array(
            'name' => $input['name'],
            'email' => $input['email'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to($request->input('email'))->subject('Kazakhfilm');
        });*/
        return redirect()->to(url()->previous())->withFragment('contact')->with('status-mess', __('local.Contact Form Submit Successfully!'));
        } /*else{
        return redirect()->to(url()->previous())->withFragment('contact')->with('status-mess-err', 'All fields must be filled in!')->withInput();
        }*/

}
