<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateProfileController extends Controller
{
    public function index()
    {
        return view('corporateprofile.index');
    }
}
