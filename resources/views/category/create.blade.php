


@extends('layouts.blog_item')

@section('content')
    <h2>Create Category</h2>

    {!! Form::model(new App\Category, ['route' => ['categories.store']]) !!}
        @include('category/partials/create_form', ['submit_text' => 'Create Category'])
    {!! Form::close() !!}

<div>
    <p>
       {!! link_to_route('categories.index', 'Back to Category') !!}

 </p>
</div>
@endsection
