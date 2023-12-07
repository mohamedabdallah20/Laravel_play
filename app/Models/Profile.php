<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'phone'
    ];

    public function profileable(){
        return $this->morphTo();
    }

    // many-to-many Morphs
    // public function users(){
    //     return $this->morphedByMany(User::class,'profileable' );
    // }
}
