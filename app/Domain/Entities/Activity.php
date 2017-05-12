<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Entities
{
    
    use SoftDeletes;
    
    protected $fillable = [
        'name', 'image', 'description', 'date_activity', 'time', 'place', 'participant', 'status', 'user_id',
    ];

    protected $primaryKey = 'id';
    
    protected $with=['users'];
    
    public function users()
    {
        return $this->belongsTo('App\Domain\Entities\User', 'user_id');
    }
}
