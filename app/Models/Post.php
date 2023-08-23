<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['titele', 'content', 'slug'];

    // una funzione standarta che modifica il titpo da Ciao mondo a Ciao-mondo 
    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
    
    use HasFactory;
}