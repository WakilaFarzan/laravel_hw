


@extends('layouts.blog_item')

@section('content')
    <h2>Edit Comment</h2>

   {!! Form::model($comment, ['method' => 'PATCH', 'route' => ['blogs.comments.update', $blog->id, $comment->id]]) !!}
   <div class="row">
   <div class="col-md-8 col-md-offset-2">
        @include('blogitem.partials.create_comment', ['submit_text' => 'Edit Comment'])
      </div>
    </div>
    {!! Form::close() !!}
@endsection