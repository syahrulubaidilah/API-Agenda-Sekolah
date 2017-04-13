<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Activity
 * @package App\Domain\Entities
 */
class Activity extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'date_activity', 'time', 'place', 'participant', 'user_id',
    ];

}
