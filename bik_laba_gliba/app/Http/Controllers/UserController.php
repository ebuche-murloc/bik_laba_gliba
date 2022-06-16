<?php

namespace App\Http\Controllers;

use App\Models\DeveloperInfo;
use App\Models\Entities\Course;
use App\Models\Entities\Developers;
use App\Models\Entities\User;
use App\Models\Entities\UserCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }

    public function deleteDevoloperFromDevolopment(Request $request){
        DB::table('developer')->where('development_id', '=', $request->input('id'));
        $user = User::find($request->input('id'));
        DB::table('developer')->delete($request->input('id'));
        return response([
            'message'=>'user '. $user->name . ' successfully deleted'
        ]);
    }

    public function getDevoloperInDevopment(Request $request){
        return response(['devoloper'=>DB::table('devolopment')->where('devoloper_id', '=', $request->input('id'))->get()]);
    }
}
