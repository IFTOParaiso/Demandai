<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class AreaPublish.
 *
 * @package namespace App\Entities;
 */
class AreaPublish extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    function areasFrequencyPublish()
    {
        $areasFrequencyPublish = DB::select(
            'SELECT   ap.area_id, a.name, 
                   COUNT(ap.area_id) AS qtd
                   FROM  area_publishes ap join areas a on ap.area_id = a.id
                   GROUP BY ap.area_id
                   HAVING   COUNT(ap.area_id) > 0
                   ORDER BY COUNT(ap.area_id) DESC LIMIT 5'
        );

        return $areasFrequencyPublish;

    }

}
