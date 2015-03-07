


<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name',null,array('class'=>"form-control")) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email',null,array('class'=>"form-control")) !!}
</div>

<div class="form-group">
    {!! Form::label('message', 'Message:',array('class'=>"control-label")) !!}
    {!! Form::textarea('message',null,array('class'=>"col-md-10 form-control",'rows'=>"8")) !!}
</div>

<div class="form-group">
    {!! Form::label('modified_by', 'Modified By:') !!}
    {!! Form::text('modified_by') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text,null,array('class'=>"margin-top-20 btn blue")) !!}
</div>