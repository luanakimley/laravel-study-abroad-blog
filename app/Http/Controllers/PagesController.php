<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        return view('index')->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
    
    public function showContactForm()
    {
        return view('pages.contact');
    }

    public function submitContactForm(Request $request)
    {
      $data = [
        'name' => $request->name,
        'email' =>$request->email,
        'message' =>$request->message,
      ];

      Mail::to('mwengibrian@gmail.com')->send (new VisitorContact($data));

      Session::flash('message', 'Thank you for your email');
      return redirect()->route('contact.show');
    }
     
}
