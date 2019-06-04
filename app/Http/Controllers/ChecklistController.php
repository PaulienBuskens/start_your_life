<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Checklist;

class ChecklistController extends Controller
{

    public function post(Request $req){
        $check = new Checklist;
        $check->Auth::user()->id;
        $check->items = implode(",", $req->items);
        $check->save();

        return view('checklist.checklist');
    }
    
    // public function edit($user_id){
    //     $getName = $user_id;
    //     $finds = checkbox::whereName($user_id)->first();
    //     $items = explode(",", $finds->items);
    //     return view('edit',compact('getName','items'));
    // }
}


