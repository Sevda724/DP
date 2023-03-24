<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\config\Mail;
use Illuminate\Support\Facades\DB;


class SubscribersController extends Controller
{
    public function index() {

        $subscribers = DB::table('subscribers')->get()->reverse();
        return view('subscribers', compact('subscribers'));
    }

    public function subscribe()
    {
        return redirect()->to(url()->previous())->withFragment('subs');
    }

    public function storeSubscribers(Request $request)
    {

        if($request->filled('email')) {
            $request->validate([
                'email' => 'required|email',
            ]);

            if (Subscriber::where('email', $request->input('email'))->exists()) {
                return redirect()->back()->with('status_bad', 'You are already subscribed!')->withFragment('subs');
            }

            $input = $request->all();

            Subscriber::create($input);

            \Mail::send('newSubscriberMail', array(
                'email' => $input['email'],
            ), function($message) use ($request){
                $message->from($request->email);
                $message->to('190103364@stu.sdu.edu.kz', 'Admin')->subject("New Subscriber");
            });

            return redirect()->to(url()->previous())->withFragment('subs')->with('status_good', 'Thanks for subscribing!');
        } else {
                 return redirect()->back()->with('status_bad', 'Please fill out the field!')->withFragment('subs');;
        }
    }

    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->back()->with('status', 'Subscriber deleted successfully');
    }
}
