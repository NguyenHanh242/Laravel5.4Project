<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('fullname')->pluck('fullname','id');
        return view ('admin.posts.addPost', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'preview' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail' => 'required'
        ]);
        
        $destination_path ='upload';
        $post = new Post();
        $post->name = $request->name;
        $post->preview = $request->preview;
        $post->user_id = $request->user_id;
        $post->time = date('Y-m-d');  
        
        $file = $request->file('picture');
        $file_name = date('Y-m-dH-i-s').$file->getClientOriginalName();
        $file->move($destination_path, $file_name);

        $post->picture = $file_name;
        $post->detail = $request->detail;
        
        $post->save();
        
        return Redirect::to('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $users = User::orderBy('fullname')->pluck('fullname','id');
        return view('admin.posts.updatePost', ['post' => $post, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'preview' => 'required',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail' => 'required'
        ]);
        
        
        $destination_path ='upload';
        
        $post = Post::find($id);
        $post->name = $request->name;
        $post->preview = $request->preview;
        $post->user_id = $request->user_id;
        $post->time = date('Y-m-d');
        
        $picture_old = $post->picture;
        $file = $request->file('picture');
       
        if($file != null){
            File::delete($destination_path.'/'.$picture_old);
            $file_name = date('Y-m-dH-i-s').$file->getClientOriginalName();
            $file->move($destination_path, $file_name);
            $post->picture = $file_name;
        } else {
            $post->picture = $picture_old;
        }
        
        $post->detail = $request->detail;
        $post->save();
        
        return Redirect::to('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return Redirect::to('posts');
    }
}
