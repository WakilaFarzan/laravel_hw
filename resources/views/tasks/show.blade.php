@extends('app')

@section('content')
    <h2>
        {{--{{route('projects.show', $project->name, [$project->slug])}}--}}
        {{ $task->name }}
    </h2>

    {{ $task->description }}
@endsection