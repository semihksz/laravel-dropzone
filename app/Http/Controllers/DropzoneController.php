<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{

    //proje çalıştırıldığında açılacak olan sayfayı seçiyoruz
    public function index()
    {
        return view('dropzone');
    }


    //resim yükleme fonksiyonunu oluşturuyoruz
    public function upload(Request $request)
    {
        //gelen resim dosyalarını alıyoruz ve $file değişkenine aktarıyoruz
        $file = $request->file('file');
        //dosyanın adını rastgele sayılardan oluşturup getClientOriginalExtension() fonksiyonu ile yüklenen dosyanın uzantısını alıyoruz
        $filename = rand(0, 1000) . "." . $file->getClientOriginalExtension();
        //ardından gelen dosyaları public_path('images') burada belirttiğimiz yola yüklüyoruz
        $file->move(public_path('images'), $filename);

        //eğer dosya yükleme başarılı olduysa veritabanına kayıt işlemini yapıyoruz
        if ($file) {
            Images::create([
                'name' => $filename,
            ]);
        }

        return redirect()->route('dropzone');
    }
}
