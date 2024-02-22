<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    public function dashboard()
    {
        return Inertia::render('IndexPage');
    }
}
