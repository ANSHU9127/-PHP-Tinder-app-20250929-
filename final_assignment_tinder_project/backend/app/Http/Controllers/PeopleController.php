
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Like;

class PeopleController extends Controller {

    function index(){
        return Person::paginate(10);
    }

    function like($id){
        Like::create(['person_id'=>$id, 'status'=>'like']);
        return ['status'=>'liked'];
    }

    function dislike($id){
        Like::create(['person_id'=>$id, 'status'=>'dislike']);
        return ['status'=>'disliked'];
    }

    function liked(){
        return Like::where('status','like')->get();
    }
}
