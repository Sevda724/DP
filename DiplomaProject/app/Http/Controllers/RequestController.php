<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userRequest;
use App\Models\Catalog;

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
        $this->validate($request, [
            'userName' => 'required',
            'userEmail' => 'required|email',
            'userSubject' => 'required',
            'userMessage' => 'required',
        ]);

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

        redirect()->to(url()->previous())->with('status-mess1111', 'Contact Form Submit Successfully!')->withInput();;
    }
}