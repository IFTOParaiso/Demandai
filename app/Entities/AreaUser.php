<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class AreaUser.
 *
 * @package namespace App\Entities;
 */
class AreaUser extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function areaUserFrequency(){

        $areaUserFrequency = DB::select('SELECT   au.area_id, a.name, 
                COUNT( au.area_id) AS qtd
                FROM  area_users au join areas a on au.area_id = a.id
                GROUP BY  au.area_id
                HAVING   COUNT(au.area_id) > 0
                ORDER BY COUNT(au.area_id) DESC LIMIT 5');

        return $areaUserFrequency;
    }

}
