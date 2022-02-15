<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $data = [
            'image' => Image::all(),
        ];

        return view('index', $data);
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
