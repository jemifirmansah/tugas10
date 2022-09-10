<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use illuminate\Support\Str;

class Produk extends Model{
    protected $table = 'produk';

    protected $casts= [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'harga' => 'decimal:3'

    ];

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    } 

    function getHargaStringAtrribute(){
        return "Rp.".number_format( $this->stringattribute['harga']);
    }

    function handleUploadFoto(){
        if(request()->hasfile('foto')){
            $foto = request()->file('foto');
            $destination = "images/produk";
            $randomStr = Str::random(5);
            $filename = $this->id. "-" .time(). "-" .$randomStr. "." .$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->Foto = "app/" .$url;
            $this->save();
        }
    }


}