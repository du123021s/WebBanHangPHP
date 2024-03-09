<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catalog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Catalog';

    protected $fillable = [
        'catalogID',
        'name',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
