
@extends('layouts.blog_item')
@section('content')
    <h2>Blog</h2>

    @if ( !$blog->count() )
        You have no blogs
    @else
        <ul>
            @foreach( $blog as $blog )
                <li>
                 {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.blogs.destroy', $blog->title))) !!}
                        <a href="{{ route('categories.blogs.show', $blog->title) }}">{{ $blog->title }}</a>
                        (
                            {!! link_to_route('categories.blogs.edit', 'Edit', array($blog->title), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}

                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('categories.blogs.create', 'Create Blog') !!}
    </p>
@endsection