





<div class="form-group">
    {!! Form::label('voter_id', 'Voter Id:') !!}
    {!! Form::text('voter_id') !!}
</div>

<div class="form-group">
    {!! Form::label('symbol', 'Select Symbol of Candidate:') !!}
    {!!Form::select('symbol', [
          'Laptop' => 'Laptop',
          'Mirror' => 'Mirror',
          'Candle' => 'Candle',
          'Mango' => 'Mango'
          ]
       ) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>