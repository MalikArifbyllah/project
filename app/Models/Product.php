<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'notes',
        'user_id',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);   
    }

    public function category ()
    {
        return $this->belongsTo(Category ::class);   
    }
}
