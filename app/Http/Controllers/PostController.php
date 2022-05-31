<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\StorePost;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index',['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        $data = $request->only(['title','content']);
        $data['active'] = false;

        Post::create($data);

        $request->session()->flash('status','The post has been created !!');
        $request->session()->flash('notif','CREATE');
        $request->session()->flash('icone','fa-solid fa-circle-plus');

        return Redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.show',['post' => Post::FindOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit',['post' => Post::FindOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
        $post = Post::FindOrFail($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->save();

        $request->session()->flash('status','The post has been updated !!');
        $request->session()->flash('notif','UPDATE');
        $request->session()->flash('icone','fa-solid fa-pen-to-square');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post = Post::FindOrFail($id);
        $post->delete();

        $request->session()->flash('status','The post has been deleted !!');
        $request->session()->flash('notif','DELETE');
        $request->session()->flash('icone','fa-solid fa-trash-can');

        return redirect()->route('posts.index');
    }
}
