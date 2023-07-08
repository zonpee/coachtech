<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'nationality'];

    public function getDetail()
    {
      $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age .  '才'.') '.$this->nationality;
      return $txt;
    }

    public function book(){
      return $this->hasOne('App\Models\Book');
    }
    
    public function books(){
      return $this->hasMany('App\Models\Book');
    }
}
