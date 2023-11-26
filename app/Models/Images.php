<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    //dosya yükleme işleminin yapılabilmesi için oluşturduğumuz tablodaki sütun isimlerini burada belirtiyoruz
    protected $fillable = [
        'name',
    ];
}
