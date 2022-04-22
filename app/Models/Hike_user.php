<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hike_user extends Model
{
    use HasFactory;
    protected $table = 'hike_users';


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function hike() {
        return $this->belongsTo(Hike::class, 'hike_id');
    }

    protected $fillable = [
        'id',
        'hike_id',
        'user_id',
        'role'
    ];
}
