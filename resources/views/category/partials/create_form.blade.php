
<div class="row">
<div class="col-md-6 col-md-offset-3">

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}

</div>

<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::text('created_by') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
</div>
</div>
