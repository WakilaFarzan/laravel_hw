<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Category;
use App\Blog;
use Illuminate\Http\Request;

class CommentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Category $category, Blog $blog)
	{
        $input = Input::all();
        $input['blog_id'] = $blog->id;
        Comment::create( $input );

        return Redirect::route('categories.show',[$blog->id, $category->id])->with('Comment submitted.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Blog $blog,Comment $comment)
	{
        return view('blogitem.show', compact('blog','comment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Blog $blog,Comment $comment)
	{
        return view('comment.edit', compact('comment', 'blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Blog $blog, Comment $comment, Category $category)
	{
        $input = array_except(Input::all(), '_method');
        $comment->update($input);

        return Redirect::route('categories.show', [$blog->id, $category->id])->with('message', 'comment updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Blog $blog, Comment $comment, Category $category)
	{
        $comment->delete();

        return Redirect::route('categories.show',[$blog->id, $category->id])->with('message', 'comment deleted.');
	}

}
