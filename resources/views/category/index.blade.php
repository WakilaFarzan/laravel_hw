


@extends('layouts.blog_item')
@section('content')
    <h2>Categories</h2>
    @if ( !$categories->count() )
            You have no blogs
   @else
    <table class="table table-bordered table-striped table-condensed flip-content">
    <tr>
    <td>Category Name</td>
    <td>Action</td>
    </tr>
     @foreach( $categories as $category )
    <tr>
    <td> <a href="{{ route('categories.show', $category->id) }}">{{ $category->title }}</a></td>
    <td>
      {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->id))) !!}
      {!! link_to_route('categories.edit', 'Edit', array($category->id), array('class' => 'btn btn-info')) !!}
      {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
     {!! Form::close() !!}
    </td>
    </tr>
     @endforeach
    </table>
     @endif

 <div>
     <p>
              {!! link_to_route('categories.create', 'Create Category') !!}

          </p>
 </div>

     @endsection

        {{--<ul>--}}
            {{--@foreach( $categories as $category )--}}
                {{--<li>--}}
                 {{--{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->title))) !!}--}}
                        {{--<a href="{{ route('categories.show', $category->id) }}">{{ $category->title }}</a>--}}
                        {{--(--}}
                            {{--{!! link_to_route('categories.edit', 'Edit', array($category->title), array('class' => 'btn btn-info')) !!},--}}
                            {{--{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}--}}
                        {{--)--}}
                    {{--{!! Form::close() !!}--}}

                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endif--}}

    {{--<p>--}}
        {{--{!! link_to_route('categories.create', 'Create Category') !!}--}}
    {{--</p>--}}
{{--@endsection--}}