<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    use HasFactory;
    protected $fillabel=['name']; 
    public function authCount(){
        return $this->hasMany(Author::class,'id','id');
    }
}
