<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\ACME\Page;
use Canvas\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Propaganistas\LaravelPhone\PhoneNumber;

class FrontendController extends Controller
{
    public function home() {
        $posts = Post::published()->latest()->take(3)->get();
        return view('frontend.home', compact('posts'));
    }

    public function about() {
        return view('frontend.about');
    }

    public function contact(Request $request) {
        if($request->isMethod('GET')) return view('frontend.contact');
        $request->validate([
            'name' => 'required|max:100',
            'message' => 'required|max:500',
            'contact' => filter_var($request->contact, FILTER_VALIDATE_EMAIL) ? 'required_if:email,null|email' : 'required_if:email,null|phone:AUTO,NG',
            'email' => 'required_if:contact,null|email',
            'phone' => 'required_if:contact,null|phone:AUTO,NG',
            'subject' => 'required_if:contact,null'
        ]);

        if($request->contact && !filter_var($request->contact, FILTER_VALIDATE_EMAIL)) $request->contact = (string) PhoneNumber::make($request->contact);
        if($request->phone) $request->phone = (string) PhoneNumber::make($request->phone);

        // return (new ContactUs($request->toArray()))->render();
        Mail::to(env('CONTACT_EMAIL_ADDRESS'))->send(new ContactUs($request->toArray()));
        if($request->ajax()) return response()->json(['success' => config('app.name') . ' have gotten your mail and will reply as soon as possible, thank you']);

        return back()->withSuccess(config('app.name') . ' have gotten your mail and will reply as soon as possible, thank you');
    }

    public function careers() {
        return view('frontend.careers');
    }

    public function logistics() {
        return view('frontend.services.logistics');
    }

    public function oil() {
        return view('frontend.services.oil');
    }

    public function gas() {
        return view('frontend.services.gas');
    }

    public function shop() {
        return view('frontend.shop.construction');
    }
}
