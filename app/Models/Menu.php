<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['nama_menu', 'harga', 'deskripsi'];

    public function stok(): HasOne
    {
        return $this->hasOne(Stok::class, 'menu_id', 'id');
    }
}
