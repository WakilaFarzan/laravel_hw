
@extends('layouts.blog_item')

@section('content')
    <h2>Create Blog</h2>

    {!! Form::model(new App\Blog, ['route' => ['categories.blogs.store',$category->id], 'class'=>'']) !!}
        @include('blogitem/partials/create_form', ['submit_text' => 'Create Blog'])
    {!! Form::close() !!}

  <div>
      <p>
           {!! link_to_route('categories.index', 'Back to Category') !!}

       </p>
  </div>

@endsection
