<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TalksController extends Controller
{
    //クライアント側 一覧表示
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('lists',['posts'=>$posts]);
    }
    
    //クライアント側 詳細表示
    public function show($id){
        $post = Post::find($id);
        return view('detail',compact('post'));
    }
}
