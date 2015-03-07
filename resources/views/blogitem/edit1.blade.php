



@extends('layouts.blog_item')

@section('content')
    <h2>Edit Blog {{ $blog->title }}</h2>

   {!! Form::model($blog, ['method' => 'PATCH', 'route' => ['blogitem.update', $blog->title]]) !!}
        @include('blogitem/partials/create_form', ['submit_text' => 'Edit Blog'])
    {!! Form::close() !!}
@endsection