<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'competition_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function participants()
    {
        return $this->hasMany('App\Models\Participant');
    }
}
