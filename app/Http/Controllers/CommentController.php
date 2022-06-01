<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Http\Requests\StoreComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post_id)
    {
        $post = post::FindOrFail($post_id);
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($post_id)
    {
        return view('comments.create',['post' => $post_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComment $request,$post_id)
    {
        $post = Post::FindOrFail($post_id);
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->post()->associate($post)->save();

        $request->session()->flash('status','The comment has been created !!');
        $request->session()->flash('notif','CREATE');
        $request->session()->flash('icone','fa-solid fa-comment-dots');

        return redirect()->route('posts.show',['post' => $post_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        return view('comments.edit',['comment' => Comment::FindOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreComment $request, $id)
    {
        $comment = Comment::FindOrFail($id);
        $comment->content = $request->input('content');
        $comment->save();

        $request->session()->flash('status','The comment has been updated !!');
        $request->session()->flash('notif','UPDATE');
        $request->session()->flash('icone','fa-solid fa-pen-to-square');

        return redirect()->route('posts.show',['post' => $comment->post_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $comment = Comment::FindOrFail($id);
        $post_id = $comment->post_id;
        $comment->delete();

        $request->session()->flash('status','The comment has been delted !!');
        $request->session()->flash('notif','DELETE');
        $request->session()->flash('icone','fa-solid fa-trash-can');

        return redirect()->route('posts.show',['post' => $post_id]);
    }
}
