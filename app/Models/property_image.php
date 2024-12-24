<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property_image extends Model
{
    use HasFactory;

    public function property(){
        $this->hasMany(property::class);
    }

    protected $fillable = [
        'image_name',
        'title',
        'username',
        'property_id',
       
    ];

    protected $attributes = [
        'title'=>'nullable',
        'image_name'=>'nullable',

    ];
}
