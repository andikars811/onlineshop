<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $fillable = ['nama', 'ketarangan'];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
