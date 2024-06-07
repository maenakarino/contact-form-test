<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $contacta = Contact::with('category')->get();
        $categories = Category::all();
        
        return view('index', compact('contact', 'category'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content']);
        Contact::create($contact);

        if($request->input('back') == 'back'){
            return redirect('/')->withInput();
        }
        return view('thanks');

       
    }
}
