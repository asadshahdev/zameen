<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;

    public function user(){
        $this->hasMany(User::class);
    }

    protected $fillable = [
        'title',
        'description',       
    ];

}
