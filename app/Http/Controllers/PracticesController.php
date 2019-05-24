<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Category;
use App\Practice;
use Auth;

class PracticesController extends Controller
{
    public function practice(){
        $categories = Category::all();
        return view('practices.practices', ['categories'=>$categories]);
    }

    public function addPractice(Request $request){

        $this->validate($request, [
            'practice_title' => 'required',
            'practice_body' => 'required',
            'category_id' => 'required',
            'practice_image' => 'required'
        ]);
        $practices = new Practice;
        $practices->practice_title = $request->input('practice_title');
        $practices->user_id = Auth::user()->id;
        $practices->practice_body = $request->input('practice_body');
        $practices->category_id = $request->input('category_id');

        if(Input::hasFile('practice_image')){
            $file = Input::file('practice_image');
            $file->move(public_path(). '/practices_images' . '/', $file->getClientOriginalName());
            $url = URL::to("/") . '/practices_images' . '/' . $file->getClientOriginalName();
        }

        $practices->practice_image = $url;
        $practices->save();
        return redirect('/home')->with('response', 'Practice Added Successfully');

    }

    public function view($practice_id){
        $practices = Practice::where('id', '=' , $practice_id)->get();
        $categories = Category::all();
        return view('practices.view', ['practices'=> $practices, 'categories'=>$categories]);
    }

    public function edit($practice_id){
        return $practice_id;
    }
}
