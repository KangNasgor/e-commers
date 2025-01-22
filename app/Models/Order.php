<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity', 'status']; // Pastikan atribut yang bisa diisi diatur dengan benar

    public function user()
    {
        return $this->belongsTo(User::class); // Relasi ke User
    }
}

