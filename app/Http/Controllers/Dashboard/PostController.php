<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('dashboard/post/index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.create', compact('post', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Post::create($request->validated());
        return to_route('post.index')->with('status', 'Publicación creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard/post/show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard/post/edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();
        // IMAGE
        if(isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'),$filename);
        }
        $post->update($data);
        return to_route('post.index')->with('status', 'Publicación modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Publicación eliminada correctamente');
    }
}
