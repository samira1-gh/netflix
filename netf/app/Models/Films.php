<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;

    protected $table = 'films';

    protected $primaryKey = 'id';

    protected $fillable = ['film_name', 'image', 'description', 'category', 'duration', 'rate', 'user_id'];

    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}