<?php

namespace Kangyasin\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
namespace Kangyasin\Contact\Models\Contact;


class ContactController extends Controller
{
    //

    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Contact::create($request->all());
        return redirect(route('contact'));
    }

}
