<?php

namespace App\Http\Controllers;

use App\Entities\Area;
use App\Entities\AreaPublish;
use App\Entities\AreaUser;
use App\Entities\Institution;
use App\Entities\Publish;
use App\Entities\PublishUser;
use App\Entities\UserTypeUser;
use Illuminate\Http\Request;
use App\Entities\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\In;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $publish;

    public function __construct(Publish $publish)
    {
        $this->middleware('auth');
        $this->publish = $publish;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AreaPublish $areaPublish, PublishUser $publishUser)
    {

        $publishes = $this->publish->all();
        $researchers = UserTypeUser::where('type_user_id','=','3')->get();
        $institutions = Institution::all();
        $areas = Area::all();
        $areasFpublishs = $areaPublish->areasFrequencyPublish();
        $userRpublishes = $publishUser->userRelatedPublish();

        $user = new User();
        $user->id = Auth::user()->id;
        $tipouser = 0;
        $tipo = $user->tipoUsuario()->get()->all();
        foreach ($tipo as $t) {
            $tipouser = $t->id;
        }
        if($tipouser == 3){
            return redirect('listar-edital');
        }
        else{
            return view('vendor.adminlte.users.admin.index', compact('publishes','researchers','institutions','areas','areasFpublishs','userRpublishes'));
        }

    }
}
