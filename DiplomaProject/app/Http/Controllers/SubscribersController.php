<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\config\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class SubscribersController extends Controller
{
    //displaying subscribers in th eadmin part of the project.
    public function index() {

        $subscribers = DB::table('subscribers')->get()->reverse();
        return view('subscribers', compact('subscribers'));
    }

    public function subscribe()
    {
        return redirect()->to(url()->previous())->withFragment('subs');
    }

    //adding new subscribers to db and sending info about new subscriber to the company
    public function storeSubscribers(Request $request)
    {
        //validation rules and validation messages
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'], [
            'email.required' => __('local.Please enter your email address.'),
            'email.email' => __('local.Please enter a valid email address.'),
        ]);
        //This method is crucial for redirecting with parameters after a failed validation process.
        if ($validator->fails()) {
        return redirect()
        ->back()
        ->withInput()
        ->withErrors($validator)
        ->with('status_bad', __('local.Please fill out the field!'))
        ->withFragment('subs');
        } 
    
        $validator->validate();
            //This code snippet checks if a user is already subscribed, preventing them from subscribing again.
            if (Subscriber::where('email', $request->input('email'))->exists()) {
                return redirect()->back()->with('status_bad', __('local.You are already subscribed!'))->withFragment('subs');
            }

            $input = $request->all();
            // adding input to db
            Subscriber::create($input);
            //sending message about new subscriber to the company
            \Mail::send('newSubscriberMail', array(
                'email' => $input['email'],
            ), function($message) use ($request){
                $message->from($request->email);
                $message->to('190103364@stu.sdu.edu.kz', 'Admin')->subject("New Subscriber");
            });

            return redirect()->to(url()->previous())->withFragment('subs')->with('status_good', __('local.Thanks for subscribing!'));
    }
    //deleting subscriber in the admin part of the project
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->back()->with('status', __('local.Subscriber deleted successfully!'));
    }
}
