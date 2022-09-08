<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }

    public function albom() {
        return view('albom');
    }

    public function kalendar() {
        return view('kalendar');
    }

    public function auth() {
        return view('auth');
    }

    public function contactssubmit() {
        return request()->all();
    }
}
