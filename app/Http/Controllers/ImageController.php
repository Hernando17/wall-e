<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png|max:4096',
        ]);

        $file = $request->file('image');
        $name = $file->hashName();

        $data = [
            'image' => $name,
        ];

        Image::create($data);

        $request->file('image')->store('images');


        return redirect('/');
    }
}
