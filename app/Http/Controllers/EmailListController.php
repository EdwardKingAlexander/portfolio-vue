<?php

namespace App\Http\Controllers;

use App\Models\EmailList;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class EmailListController extends Controller
{
    public function store(Request $request)
    {
        

        //Validate the request
        $request->validate([
            'email' => 'required|string|unique:App\Models\EmailList,email',
        ]);

        EmailList::create([
            'email' => $request->email
        ]);

        return redirect('/')->with('successMessage', true);       
    }

    public function destroy()
    {
        return 'BOOM!';
    }
}
