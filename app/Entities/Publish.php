<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Publish.
 *
 * @package namespace App\Entities;
 */
class Publish extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'title','description','date_closure','link'];

    public function areasEdital(){
        return $this->belongsToMany(Area::class, 'area_publishes', 'publish_id', 'area_id');
    }

    public function editalUsuario(){
        return $this->belongsToMany(Area::class, 'publish_users', 'publish_id', 'user_id');
    }


}
