<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $data = Image::create([
            'image' => $request->input('image'),
        ]);

        return redirect('/');
    }
}
