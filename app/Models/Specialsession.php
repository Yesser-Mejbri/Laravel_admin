<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialsession extends Model
{
    use HasFactory;
    protected $fillabel=['title','description','order']; 
    public function auth(){
        return $this->hasMany(Author::class,'id','id');
    }
}
