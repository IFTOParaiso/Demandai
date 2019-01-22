<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Support\Facades\DB;
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
        return $this->belongsToMany(User::class, 'publish_users', 'publish_id', 'user_id')->withPivot('interest');
    }
    public function atualizarInteresse($user_id,$publish_id,$interesse){
        $data[]=['user_id'=>$user_id,'publish_id'=>$publish_id,'interest'=>$interesse];
        $retorn = DB::table('publish_users')->where('user_id',$user_id)->where('publish_id',$publish_id)->update($data[0]);
        return $retorn;
    }



}
