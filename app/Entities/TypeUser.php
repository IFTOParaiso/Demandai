<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class TypeUser.
 *
 * @package namespace App\Entities;
 */
class TypeUser extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function usuario(){
        return $this->belongsToMany(User::class, 'user_type_users', 'type_user_id', 'user_id');
    }

}
