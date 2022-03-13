<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    //
    public function index()
    {
        $car = car::all();
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('page.admin.redirect', compact('car'));
        } else {

            return view('page.user.redirect', compact('car'));
        }
    }

}
