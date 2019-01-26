<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Area.
 *
 * @package namespace App\Entities;
 */
class Area extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function researchersAreas(){
        return $this->belongsToMany(User::class,'area_users','area_id','user_id');
    }

}
