


@extends('layouts.blog_item')

@section('content')
    <h2>Edit Category</h2>

    {!! Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update', $category->title]]) !!}
        @include('category/partials/create_form', ['submit_text' => 'Edit Category'])
    {!! Form::close() !!}
@endsection