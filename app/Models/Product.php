<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name', 'harga', 'image', 'stok', 'kadaluarsa', 'berat_satuan', 'komposisi', 'deskripsi'
    ];
}