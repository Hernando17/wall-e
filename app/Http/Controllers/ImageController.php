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
            'title' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('image');
        $name = $file->hashName();

        $data = [
            'image' => $name,
            'title' => $request->title,
            'description' => $request->description,
        ];

        Image::create($data);

        $request->file('image')->store('images');

        return redirect('/');
    }

    public function detail(Image $id)
    {
        return view('detail', ['image' => $id]);
    }

    public function delete(Image $image)
    {
        if (!is_null($image->image)) {
            Storage::disk('public')->delete('images/' . $image->image);
        }

        Image::where('id', $image->id)->delete();
        return redirect('/');
    }

    public function download(Image $image)
    {
        return Storage::download($image);
    }
}
