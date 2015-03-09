

<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>

{{--<div class="form-group">--}}
    {{--{!! Form::label('category_id', 'Category:') !!}--}}
    {{--{!! Form::text('category_id') !!}--}}
{{--</div>--}}

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!!Form::select('category_id', [
          '1' => 'Education',
          '2' => 'Games',
          '3' => 'Entertainment',
          '4' => 'International News'
          ]
       ) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Publish:') !!}
    {!! Form::checkbox('status') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description',null,array('class' => "ckeditor form-control",'data-error-container'=>"#editor2_error")) !!}

</div>

<div class="form-group">
    {!! Form::label('tag', 'Tag:') !!}
    {!! Form::text('tag') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>

</div>
</div>