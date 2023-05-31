<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\InfomationUserRequest;

use App\Models\Project;

class ProjectController extends Controller
{
       private $users;
    public function __construct(){
        $this->users = new Project();
    }

    public function showListUser(Request $request){
        $keywords = $request->keywords;
        if(!empty($keywords)){
            $list = $this->users
            ->where('name', $keywords)
            ->orwhere('email', $keywords)
            ->orwhere('sdt', $keywords)
            ->Paginate(3);
        }else{
            $list = $this->users
            ->orderBy('created_at','DESC')
            ->Paginate(3);
        }

        return view('index', compact('list'));
    }

    public function addUser(){
        return view('add_user');
    }

    public function postUser(InfomationUserRequest $request){
        $post = new Project;
        $post->name = $request->name;
        $post->email = $request->email; 
        $post->sdt = $request->sdt;
        $post->save();
        return redirect()->route('project.show_list_user');
    }

    public function indexUpdateUser(Request $request){
        $infomation = Project::find($request->id);

        return view('update_user', compact('infomation'));
    }
    
    public function updateUser(InfomationUserRequest $request){
        $updateUser = Project::find($request->id);
        $updateUser->name = $request->name;
        $updateUser->email = $request->email; 
        $updateUser->sdt = $request->sdt;
        $updateUser->save();
        return redirect()->route('project.show_list_user');
    }

    public function deleteUser(Request $request){
        $deleteUser = Project::find($request->id);
        $deleteUser->delete();
        return redirect()->route('project.show_list_user');
    }
}