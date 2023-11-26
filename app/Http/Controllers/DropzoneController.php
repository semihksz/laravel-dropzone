<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    public function index()
    {
        return view('dropzone');
    }

    public function upload(Request $request)
    {
        $file = $request->file('file');
        $filename = rand(0, 1000) . "." . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);

        if ($file) {
            Images::create([
                'name' => $filename,
            ]);
        }

        return redirect()->route('dropzone')->with('success', 'Resim Dosyaları Başarıyla Yüklendi!');
    }
}
