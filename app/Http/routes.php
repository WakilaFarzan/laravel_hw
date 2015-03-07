<?php


Route::get('/', 'WelcomeController@index');
Route::get('/dolon', 'WelcomeController@dolon');
Route::get('home', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/about', 'AboutController@about');

Route::get('/blog', 'BlogController@index');

Route::get('/contact', 'ContactController@contact');

Route::get('/newuserprofile', 'NuserprofileController@index');

Route::get('/task/index', 'TaskController@index');


Route::get('article/create', 'ArticleController@create');


Route::get('layouts/newuserprofile', 'NuserprofileController@index');


Route::get('/searchResult.index', 'SearchResultController@search');


Route::get('/userprofile', 'UserController@userprofile');

Route::get('/newtimeline', 'NewTimelineController@newtimeline');


Route::get('/timeline', 'TimelineController@index');
Route::get('/timelineold', 'TimelineoldController@index');
Route::get('/faq', 'faqController@index');

//Route::get('/blogitem', 'BlogItemController@index');
Route::get('/portfolio', 'PortfolioController@portfolio');
Route::get('/price', 'PriceController@pricing');




Route::model('tasks', 'Task');
Route::model('projects', 'Project');


Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectsController');
//Route::resource('tasks', 'TasksController');
Route::resource('projects.tasks', 'TasksController');
//
//Route::model('blogposts', 'BlogPost');
//
//Route::bind('posts', function($value, $route) {
//    return App\BlogPost::whereTitle($value)->first();
//});

Route::model('blogs', 'Blog');
Route::bind('blogs', function($value, $route) {
    return App\Blog::whereId($value)->first();
});
Route::resource('blogitem', 'BlogItemController');






Route::model('categories', 'Category');
Route::model('blogs', 'Blog');
Route::model('comments', 'Comment');

Route::bind('categories', function($value, $route) {
    return App\Category::whereId($value)->first();
});
Route::bind('blogs', function($value, $route) {
    return App\Blog::whereId($value)->first();
});
Route::bind('comments', function($value, $route) {
    return App\Comment::whereId($value)->first();
});


Route::resource('categories', 'CategoryController');
Route::resource('categories.blogs', 'BlogsController');
Route::resource('blogs.comments', 'CommentsController');

Route::get('fileentry', 'FileEntryController@index');
Route::get('fileentry/get/{filename}', [
    'as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentry/add',[
    'as' => 'addentry', 'uses' => 'FileEntryController@add']);

Route::model('voters', 'Voter');
Route::resource('voter', 'VoterController');
