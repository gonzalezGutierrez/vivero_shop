<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'review',
        'email',
        'review_qualification',
        'product_id'
    ];
}
