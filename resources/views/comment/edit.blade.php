


@extends('layouts.blog_item')

@section('content')
    <h2>Edit Comment</h2>

   {!! Form::model($comment, ['method' => 'PATCH', 'route' => ['blogs.comments.update', $blog->id, $comment->id]]) !!}
        @include('blogitem.partials.create_comment', ['submit_text' => 'Edit Comment'])
    {!! Form::close() !!}
@endsection