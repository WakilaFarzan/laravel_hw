



<div class="form-horizontal">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>

<div class="form-horizontal">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::text('category_id') !!}
</div>

<div class="form-horizontal">
    {!! Form::label('status', 'Publish:') !!}
    {!! Form::checkbox('status') !!}
</div>

<div class="form-horizontal">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description',null,array('class' => "ckeditor form-control",'data-error-container'=>'#editor2_error')) !!}

</div>

<div class="form-horizontal">
    {!! Form::label('tag', 'Tag:') !!}
    {!! Form::text('tag') !!}
</div>

<div class="form-horizontal">

    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>

<div class="form-horizontal">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::text('created_by') !!}
</div>

<div class="form-horizontal">
    {!! Form::label('modified_by', 'Modified By:') !!}
    {!! Form::text('modified_by') !!}
</div>

<div class="form-horizontal">
    {!! Form::submit($submit_text) !!}
</div>