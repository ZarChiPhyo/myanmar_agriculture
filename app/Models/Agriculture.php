<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agriculture extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    protected $fillable = ['id', 'title', 'date', 'author', 'content'];
}
