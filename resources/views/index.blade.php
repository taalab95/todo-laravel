@extends('layouts.app')

@section('title','THE LIST')

@section('content')
    <ul>
        @forelse ($tasks as $task)
            <li>
            <a href="{{route('task.show', ['id' => $task->id])}}">{{$task->title}}</a> 
            </li>
        @empty
            <div>empty tasks</div>
        @endforelse
    </ul>
@endsection


 

