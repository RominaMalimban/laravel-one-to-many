<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mail'
    ];

    // FUNZIONE CHE IDENTIFICA RELAZIONE CON PERSON_DETAILS:
    public function PersonDetail(){
        return $this -> hasOne(PersonDetail::class);
    }

    // FUNZIONE CHE IDENTIFICA RELAZIONE CON POSTS:
    public function posts(){
        return $this-> hasMany(Post::class);
    }
}
