<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dateArticle extends Model
{
    use HasFactory;
    protected $fillable = ['checkIn', 'checkOut', 'noRoom', 'adult','children'];
}
