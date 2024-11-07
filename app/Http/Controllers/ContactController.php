<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show() { 
        return view('contact'); 
    }
     // A kapcsolati űrlap adatainak kezelése
     public function store(Request $request)
     {
         // Itt kezelheted az űrlap adatainak mentését vagy feldolgozását
         // Például: validálhatod az adatokat
         $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'message' => 'required'
         ]);
 
         // Az adatokat elmentheted adatbázisba, küldhetsz e-mailt, stb.
         // ...
 
         return redirect()->back()->with('success', 'Az üzenetet sikeresen elküldtük!');
     }
}
