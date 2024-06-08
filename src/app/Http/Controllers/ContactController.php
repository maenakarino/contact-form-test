<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::with('category')->get();
        $categories = Category::all();
        
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'content']);

        $contact = $request->only(['category_id', 'content']);
        Contact::create($contact);

        if($request->input('back') == 'back'){
            return redirect('/')->withInput();
        }
        return view('thanks');

       
    }

    public function admit(ContactRequest $request)
    {
        return view('admit');
    }
}
