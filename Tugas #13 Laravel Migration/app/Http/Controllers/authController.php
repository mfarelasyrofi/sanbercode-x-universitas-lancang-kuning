<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function form()
    {
        return view('page.form');
    }

    public function home(Request $requet)
    {
        $fname = $requet->input('first_name');
        $lname = $requet->input('last_name');
        $gender = $requet->input('gender');
        $nationality = $requet->input('nationality');
        $language_spoken = $requet->input('language_spoken');
        $bio = $requet->input('bio');

        return view('page.home', ['fname' => $fname, 'lname' => $lname, 'gender' => $gender, 'nationality' => $nationality, 'language_spoken' => $language_spoken, 'bio' => $bio]);

    }
}
