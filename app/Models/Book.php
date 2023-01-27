<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //If all fields are fillable.
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
