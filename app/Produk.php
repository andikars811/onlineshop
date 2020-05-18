<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = ['kode', 'barcode', 'nama', 'kategori_id', 'gambar', 'harga', 'stok', 'keterangan'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
