<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
  public function index()
  {
    return view('contact');
  }

  public function confirm(Request $request)
  {
    $contact = $request->
    only(['first_name', 'last_name', 'gender', 'email', 'tel', 'exchange_tel', 'subscriber_tel', 'address', 'building', 'category_id', 'detail']);
    return view('confirm', compact('contact'));
  }

  public function thanks(Request $request)
  {
    // $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'exchange_tel', 'subscriber_tel', 'address', 'building', 'category_id', 'detail']);
    // Contact::create($contact);
    return view('thanks');
  }
}