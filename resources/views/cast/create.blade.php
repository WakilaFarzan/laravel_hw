




@extends('app')

@section('content')
    <h2>Candidate Entry</h2>

    {!! Form::model(new App\Candidate, ['route' => ['cast.store'], 'class'=>'']) !!}
        @include('cast/partials/create_form', ['submit_text' => 'Cast'])
    {!! Form::close() !!}
@endsection

