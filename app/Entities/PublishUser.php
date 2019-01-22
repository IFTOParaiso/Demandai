<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class PublishUser.
 *
 * @package namespace App\Entities;
 */
class PublishUser extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['interest','user_id','publish_id'];


    function userRelatedPublish()
    {
        $userRelatedPublish = DB::select(
                'SELECT   pu.user_id, u.name, 
                COUNT( pu.user_id) AS qtd
                FROM  publish_users pu join users u on pu.user_id = u.id
                GROUP BY  pu.user_id
                HAVING   COUNT(pu.user_id) > 0
                ORDER BY COUNT(pu.user_id) DESC LIMIT 5'
        );

        return $userRelatedPublish;

    }

}
