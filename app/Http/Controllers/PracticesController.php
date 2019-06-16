<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Practice;
use App\Like;
use App\Dislike;
use App\Comment;
use App\Profile;
use Auth;

class PracticesController extends Controller
{

    public function home()
    {
        $user_id = Auth::user()->id;
        $profile = DB::table('users') 
                    ->join('profiles', 'users.id', '=', 'profiles.user_id')
                    ->select('users.*', 'profiles.*')
                    ->where(['profiles.user_id' => $user_id])
                    ->first();
        $practices = Practice::paginate(5);
        return view('practices.overviewpractices',['profile'=> $profile, 'practices' => $practices]);
    }

    public function practice(){
        $categories = Category::all();
        return view('practices.practices', ['categories'=>$categories]);
    }

    public function addPractice(Request $request){

        $this->validate($request, [
            'practice_title' => 'required',
            'practice_body' => 'required',
            'category_id' => 'required'
        ]);
        $practices = new Practice;
        $practices->practice_title = $request->input('practice_title');
        $practices->user_id = Auth::user()->id;
        $practices->practice_body = $request->input('practice_body');
        $practices->category_id = $request->input('category_id');
        $practices->practice_image = '/';
        $practices->save();
        return redirect('/')->with('response', 'Vraag succesvol toegevoegd');

    }

    public function view($practice_id){
        $practices = Practice::where('practices_id', '=' , $practice_id)->get();
        $likePractice = DB::table('likes')
            ->select('practice_id')
            ->where('practice_id', '=' , $practice_id)
            ->get()->count();
        $dislikePractice = DB::table('dislikes')
            ->select('practice_id')
            ->where('practice_id', '=' , $practice_id)
            ->get()->count();
        $comments = DB::table('users')
            ->join('comments','users.id', '=', 'comments.user_id')
            ->join('practices', 'comments.practice_id', '=' , 'practices_id')
            ->select('users.name', 'comments.*')
            ->where(['practices.practices_id'=>$practice_id])
            ->get();
        return view('practices.view', ['practices'=> $practices, 'comments' => $comments, 'likePractice' => $likePractice, 'dislikePractice' => $dislikePractice]);
    }

    public function edit($practice_id){
        $categories = Category::all();
        $practices = Practice::find($practice_id);
        $category = Category::find($practices->category_id);
        return view('practices.edit', ['categories' => $categories, 'category' => $category, 'practices' => $practices]);
    }

    public function editPractice(Request $request, $practice_id){
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

        $data = array(
            'practice_title' => $practices->practice_title,
            'user_id' => $practices->user_id,
            'practice_body' => $practices->practice_body,
            'category_id' => $practices->category_id
        );
        Practice::where('practices_id', $practice_id)
        ->update($data);
        $practices->update();
        return redirect('/home')->with('response', 'Practice Updated Successfully');

    }

    public function delete($practice_id){
        Practice::where('practice_id', $practice_id)
        ->delete();
        return redirect('/home')->with('response', 'Practice deleted Successfully');
    }

    public function category($category_id){
        $categories = Category::all();
        $practices = DB::table('practices')
            ->join('categories', 'practices.category_id', '=', 'categories.id')
            ->select('practices.*','categories.*')
            ->where(['categories.id' => $category_id])
            ->get();
        return view('categories.categoriespractices', ['categories'=>$categories, 'practices' => $practices]);
    }

    public function like($id){
        $loggedin_user = Auth::user()->id;
        $like_user = Like::where(['user_id'=>$loggedin_user, 'practice_id'=>$id])->first();
        //check if user had already liked the post;
        if(empty($like_user->user_id)){
            $user_id = Auth::user()->id;
            $email = Auth::user()->email;
            $practice_id = $id;
            $like = new Like;
            $like->user_id = $user_id;
            $like->email = $email;
            $like->practice_id = $practice_id;
            $like->save();
            return redirect("/view/{$id}]");
        } else{
            return redirect("/view/{$id}]");
        }
    }

    public function dislike($id){
        $loggedin_user = Auth::user()->id;
        $dislike_user = Like::where(['user_id'=>$loggedin_user, 'practice_id'=>$id])->first();
        //check if user had already liked the post
        if(empty($dislikes_user->user_id)){
            $user_id = Auth::user()->id;
            $email = Auth::user()->email;
            $practice_id = $id;
            $dislikes = new Dislike;
            $dislikes->user_id = $user_id;
            $dislikes->email = $email;
            $dislikes->practice_id = $practice_id;
            $dislikes->save();
            return redirect("/view/{$id}]");
        } else{
            return redirect("/view/{$id}]");
        }
    }

    public function comment(Request $request, $practice_id){
        $this->validate($request, [
            'comment' => 'required'
        ]);
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->practice_id = $practice_id;
        $comment->comment = $request->input('comment');
        $comment->save();
        return redirect("/view/{$practice_id}]")->with('response', 'Comment Added Successfully');
    }

    public function search(Request $request){
        $keywords = $request->input('search');
        $practices = Practice::where('practice_body', 'LIKE' , '%' .$keywords. '%')->get();
        return view('practices.searchpractices', ['practices' => $practices]);
    }

    public function categorien(){
        $categories = Category::all();
        return view('categories.categorien', ['categories'=>$categories]);
    }

    public function vragen(){
        $loggedin_user = Auth::user()->id;
        $practices = DB::table('practices')
            ->select('practices.*')
            ->where(['user_id' => $loggedin_user])
            ->get();
        return view('vragen', ['practices' => $practices]);
    }
}
