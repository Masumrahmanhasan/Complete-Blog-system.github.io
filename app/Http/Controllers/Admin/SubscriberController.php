<?php

namespace App\Http\Controllers\Admin;

use App\Subscriber;
use App\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function index(){
        $subscribers = Subscriber::latest()->get();
        return view('admin.subscriber', compact('subscribers'));
    }

    public function destroy($id){

        Subscriber::find($id)->delete();

        Toastr::success('Subscriber Successfully Deleted', 'Success');
        return redirect()->back();

    }
}
