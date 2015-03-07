

<div class="form-horizontal">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>

<div class="form-horizontal">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}

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