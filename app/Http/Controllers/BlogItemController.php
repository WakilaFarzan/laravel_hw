<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BlogItemController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $blogs = Blog::all();
        return view('blogitem.index1', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('blogitem.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        BlogPost::create( $input );

        return Redirect::route('blogitem.index')->with('message', 'Blog created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //$blogPost= new App\BlogPost;
        // $posts=BlogPost::whereTitle($title)->first();
//       $post=BlogPost::whereDescription($description)->first();
//      $tag=BlogPost::whereTag($tag)->first();
        //$posts = BlogPost::all();
//        return view('blogitem.show1', compact('blogpost'));
//        $blog=var_dump($blog_posts);
//        return $blog;
        //$blogPost = BlogPost::find($id);
       // $blogpost = BlogPost::find($blogpost->id);
        //$blogpost = BlogPost::find(id);
        //
        $blog = Blog::find($id);//dd($blog);

        return view('blogitem.show1', compact('blog'));

        //var_dump($blogpost->title);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Blog $blog)
	{
        return view('blogitem.edit1', compact('blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(BlogPost $blogposts)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(BlogPost $blogposts)
	{
        $blogposts->delete();

        return Redirect::route('blogitem.index')->with('message', 'Blog Post deleted.');
	}

}
