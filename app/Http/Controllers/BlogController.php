<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            ['title' => 'Első bejegyzés', 'excerpt' => 'Ez az első bejegyzés rövid leírása.'],
            ['title' => 'Második bejegyzés', 'excerpt' => 'Ez a második bejegyzés rövid leírása.'],
            ['title' => 'Harmadik bejegyzés', 'excerpt' => 'Ez a harmadik bejegyzés rövid leírása.'],
        ];

        return view('blog.index', compact('posts'));
    }

}
