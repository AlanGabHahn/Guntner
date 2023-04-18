<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function store(Request $request): RedirectResponse{


        $message = new User();
        $message->name = $request->inputName;
        $message->phone = $request->inputTelephone;
        $message->email = $request->inputEmail;
        $message->subject = $request->inputSubject;
        $message->message = $request->inputMessage;
        $message->save();

        return redirect('/');
    }
}
