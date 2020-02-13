<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function store(Request $request){

        $this->validate($request,[
            'email' => 'required|email|unique:subscribers'

        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();
        Toastr::success('You have Successfully added to our subscriber list', 'success');
        return redirect()->back();

    }
}
