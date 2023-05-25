<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Post;

class postController extends Controller
{
    //
    public function index(){
        $allPost = Post::all();
        foreach($allPost as $item){
            echo $item -> title;
                       
        }



        // return view('index');
    }

}
