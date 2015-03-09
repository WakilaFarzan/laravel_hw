<?php namespace App\Http\Controllers;

use Input;
use Redirect;
use DB;
use App\Http\Requests;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Controllers\Controller;
use App\Category;
use App\Blog;
use App\Comment;
use Illuminate\Http\Request;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::all();
        return view('category.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('category.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreCategoriesRequest $request)
	{
        $input = Input::all();
        Category::create($input);

        return Redirect::route('categories.index')->with('message', 'Category created');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Category $category)
	{
        //return view('category.show', compact('category'));

        //$category = DB::table('blogs')->where('status', '=', 1)->get();
        //$category = Blog::
        //dd($category->blogs()->where('status',1));
        //$category = $category->blogs->where('status',1);

        return view('category.show', compact('category'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Category $category)
	{
        return view('category.edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(StoreCategoriesRequest $request,Category $category)
	{
        $input = array_except(Input::all(), '_method');
        $category->update($input);

        return Redirect::route('categories.show', $category->title)->with('message', 'Category updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category)
	{
        $category->delete();

        return Redirect::route('categories.index')->with('message', 'Category deleted.');
	}

}
