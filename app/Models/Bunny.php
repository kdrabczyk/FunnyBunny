<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunny extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'color', 'image', 'user_id'];
    protected $table = 'bunny';

    //relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
