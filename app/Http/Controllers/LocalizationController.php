<?php

namespace App\Http\Controllers;

use App;
use App\Http\Livewire\HomeComponent;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function index(Request $request)
    {
        App::setLocale($request->get('languge'));
        session()->put('locale', $request->get('languge'));
        $com = new HomeComponent();
        return view('layouts.base');
    }
}
