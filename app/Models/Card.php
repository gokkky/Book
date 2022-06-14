<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Card extends Model
{
    protected $fillable = [
        'created_at', 'updated_at', 'deleted_at',
        'book_id', 'quantity', 'price',
        'user_id'
    ];
}
