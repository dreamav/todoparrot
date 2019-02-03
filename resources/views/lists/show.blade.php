@extends('layouts.app')

@section('content')

    <h1>{{  $list->name  }}</h1>

    <p>
        Created on: {{ $list->created_at }}<br/> Last modified: {{ $list->updated_at }}
    </p>

    <p>
        {{ $list->note }}
    </p>

    <h2>Tasks</h2>

    @if   ($list->tasks->count()  >  0)
        <ul>
            @foreach  ($list->tasks as  $task)

                <li>{{ $task->name }}</li>

            @endforeach
        </ul>
    @else
        <p>
            You haven't created any tasks.<br/>
            <a href="{{  URL::route('tasks.create',  [$list->id])  }}" class='btn btn-primary'>Create a task</a>

        </p>
    @endif

@endsection
