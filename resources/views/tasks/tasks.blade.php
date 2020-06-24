if('count($tasks)>0)
    <ul class="unstyled">
        @foreach($tasks as $task)
            <li class="media mb-3">
                <div class="media-body">
                    <div>
                        <p class="mb-0">{!! nl2br(e($task->content)) !!}</p>
                    </div>
                    <div>
                        @if(Auth::id()==$task->user_id)
                            {{--投稿削除ボタンのフォーム--}}
                            {!! Form::open(['route'=>['tasks.destroy',$task->id],'method'=>'delete']) !!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                        @endif        
                    </div>
                </div>
            </li>
        @endforeach    
    </ul>
    {{ $microposts->links() }}
@endif    