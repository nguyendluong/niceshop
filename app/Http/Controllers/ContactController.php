<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('client.contact.index', compact('contact'));
    }
    public function create()
    {
        $contact = Contact::all();

        return view('client.contact.index', compact('contact'));
    }
    public function store(Request $request){

        $data = $request->all();
        $contact = Contact::where('mess_phone',  $data['mess_phone'])->first();

        $link = 'http://127.0.0.1:8000/';
        Contact::create($data);
        Mail::to($request->mess_email)->send(new MessageMail($request->mess_name,$link));
        toastr()->success('Create contact successfully');
        return redirect('/contact');
    }

}
