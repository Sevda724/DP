<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\config\Mail; 


class SubscribersController extends Controller
{
    public function Subscribe()
    {
        return view('catalog');
    }

    public function storeSubscribers(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $input = $request->all();

        Subscriber::create($input);

        \Mail::send('newSubscriberMail', array(
            'email' => $input['email'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('190103364@stu.sdu.edu.kz', 'Admin')->subject("New Subscriber");
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}