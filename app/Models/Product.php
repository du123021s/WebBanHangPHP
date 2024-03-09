<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Product';

    protected $fillable = [
        'name',
        'description',
        'catalogId',
        'price',
        'stock',
        'color',
        'image1',
        'image2',
    ];

    public function catalog(){
        return $this->belongsTo(Catalog::class, 'catalogId');
    }

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
