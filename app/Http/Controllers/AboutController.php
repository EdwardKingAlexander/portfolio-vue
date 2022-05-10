<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AboutController extends Controller
{
    /**
     * Returns the About Page
     *
     */
    public function __invoke()
    {
        return Inertia::render('About');
    }
}
