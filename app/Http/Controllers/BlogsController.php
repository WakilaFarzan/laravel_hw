<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use DB;
use App\Http\Requests;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Controllers\Controller;
use App\Category;
use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class BlogsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(Category $category)
    {
        return view('blogitem.index', compact('category'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Category $category)
	{
        return view('blogitem.create', compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreBlogRequest $request, Category $category)
	{
        $input = Input::all();
        $input['category_id'] = $category->id;
        Blog::create( $input );

        return Redirect::route('categories.show', $category->id)->with('Blog created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Blog $blog
	 * @return Response
	 */
	public function show(Category $category, Blog $blog,Comment $comment)
	{
//        DB::table('blogs')->where('status', '=', 1)->get();
        return view('blogitem.show1', compact('category', 'blog','comment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Category $category, Blog $blog)
	{
        return view('blogitem.edit', compact('category', 'blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(StoreBlogRequest $request,Category $category, Blog $blog)
	{
        $input = array_except(Input::all(), '_method');
        $blog->update($input);

        return Redirect::route('categories.blogs.show', [$category->id, $blog->id])->with('message', 'Blog updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category, Blog $blog)
	{
        $blog->delete();

        return Redirect::route('categories.show', $category->id)->with('message', 'Blog deleted.');
	}

}
