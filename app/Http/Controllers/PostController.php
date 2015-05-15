<?php namespace MyBlog\Http\Controllers;

use MyBlog\Http\Requests;
use MyBlog\Entities\Post;
use MyBlog\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller {

	public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(2);
        return view('post/list_post', compact('posts'));
    }

    public function article($id)
    {
        $post = Post::findOrFail($id);
        return view('post/post', compact('post'));
    }

}
