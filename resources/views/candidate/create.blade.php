


@extends('app')

@section('content')
    <h2>Candidate Entry</h2>

    {!! Form::model(new App\Candidate, ['route' => ['candidate.store'], 'class'=>'']) !!}
        @include('candidate/partials/create_form', ['submit_text' => 'Save'])
    {!! Form::close() !!}
@endsection

