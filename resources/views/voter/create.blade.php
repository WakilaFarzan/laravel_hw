

@extends('app')

@section('content')
    <h2>Voter Entry</h2>

    {!! Form::model(new App\Voter, ['route' => ['voter.store'], 'class'=>'']) !!}
        @include('voter/partials/create_form', ['submit_text' => 'Save'])
    {!! Form::close() !!}
@endsection
