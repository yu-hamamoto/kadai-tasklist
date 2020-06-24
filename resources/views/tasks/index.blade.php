@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>

@if(Auth::check())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>タスク</th>
                <th>ステータス</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show',$task->id,['task'=>$task->id]) !!}</td>
                <td>{{ $task->content }}</td>
                <td>{{ $task->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
   <!-- <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the tasklist</h1>
             {!! link_to_route('signup.get','signup',[],['class'=>'index-link']) !!}
        </div>
    </div>-->
    
    @endif
@endsection