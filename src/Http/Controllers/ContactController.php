<?php

namespace n6solutions\contact\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use n6solutions\contact\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact::index');
    }

    public function DbSave(Request $request){
        Contact::create($request->all());
        return redirect('contact');
    }
}
