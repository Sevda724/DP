<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userRequest;
use App\Models\Catalog;
use Illuminate\Support\Facades\Validator;


class RequestController extends Controller
{
    public function movie()
    {
        return view("catalog");


    }

    public function storeRequest($id, Request $request)
    {
        $filmFromCatalog = Catalog::find($id);
        $film =  $filmFromCatalog -> Title;
        $validator = Validator::make($request->all(), [
            'userName' => 'required',
            'userEmail' => 'required|email',
            'userSubject' => 'required',
            'userMessage' => 'required'], [
        'userName.required' => __('local.Please enter your name.'),
        'userEmail.required' => __('local.Please enter your email address.'),
        'userEmail.email' => __('local.Please enter a valid email address.'),
        'userSubject.required' => __('local.Please enter a subject for your message.'),
        'userMessage.required' => __('local.Please enter a message.'),
    
        ]);
    if ($validator->fails()) {
        session()->flash('custom_message', __('local.The request form is not submitted! Please fill in all the fields!'));
    } 
    
    $validator->validate();
       
        $input = new userRequest();
        $input->filmTitle = $film;
        $input->userName = $request->input('userName');
        $input->userEmail = $request->input('userEmail');
        $input->userSubject = $request->input('userSubject');
        $input->userMessage = $request->input('userMessage');


        $input -> save();
       
        \Mail::send('RequestMailTemplate', array(
            'filmTitle' => $film,
            'userName' => $input['userName'],
            'userEmail' => $input['userEmail'],
            'userSubject' => $input['userSubject'],
            'userMessage' => $input['userMessage'],
        ), function($message) use ($request){
            $message->from($request->userEmail);
            $message->to('190103364@stu.sdu.edu.kz', 'Admin')->subject($request->userSubject);
        });

        return redirect()->route('film.show', $id)->with('status_success', __('local.Request Form Submit Successfully!'));
    }
}