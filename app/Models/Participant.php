<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'team_id',
        'name'
    ];

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }
}
