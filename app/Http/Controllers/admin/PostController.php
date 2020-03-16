<?php

namespace App\Http\Controllers\admin;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $cats=Category::all();
        return view('admin.post.create',\compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $file=$request->file('image');

        $filename=uniqid().'_'.$file->getClientOriginalName();

        $file->move(public_path().'/upload/',$filename);

        Post::create([
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'img'=>$filename,
            'cat_id'=>$request->get('cat_id'),
            'slug'=>$request->get('_token')
        ]);

        return redirect('admin/dashboard')->with('status',"Successfully Created");

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
        $post=Post::whereId($id)->firstOrFail();
        $cats=Category::all();
        return view('admin.post.edit',\compact('post','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post=Post::whereId($id)->firstOrFail();

        $postfile=$request->file('image');
        $postfilename=uniqid().'_'.$postfile->getClientOriginalName();

        $postfile->move(\public_path().'/upload/',$postfilename);

        $post->title = $request->get('title');
        $post->price = $request->get('price');
        $post->description= $request->get('description');
        $post->img =   $postfilename;
        $post->cat_id= $request->get('cat_id');

        $post->update();
        return \redirect('admin/post')->with('status','Successfuly updated Post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Post::destroy($id);

        return \redirect('admin/post')->with('status','Deleted Successful');
    }
}
