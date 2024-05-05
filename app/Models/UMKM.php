<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    use HasFactory;
    //Connect to table umkm
    protected $table = 'umkm';
    //Set the primary key
    protected $primaryKey = 'id';
    //Set the fillable column
    protected $fillable = ['nama_tempat', 'keterangan', 'harga', 'no_wa', 'thumbnail', 'photo1', 'photo2', 'photo3'];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
