<header class="mb-4">
    <nav class="navbar navbar-expend-sm navbar-dark bg-dark">
        {{--トップページへのリンク--}}
        <a class="navbar-brand" href="/">tasklist</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                    {{--ログアウトへのリンク--}}
                    <li class="dropdown-item">{!! link_to_route('logout.get','Logout') !!}</li>
                    {{--新規タスクの投稿--}}
                    <li class="dropdoen-item">{!! link_to_route('tasks.create','新規タスクの投稿',[],['class'=>'btn btn-primary']) !!} </li>
                 @else
                 <ul class="nav navbar-nav navbar-right">
                     {{--ユーザ登録ページへのリンク--}}
                     <li>{!! link_to_route('signup.get','signup',[],['class'=>'nav-link']) !!}</li>
                     {{--ログインページへのリンク--}}
                     <li class="nav-item">{!! link_to_route('login','Login',[],['class'=>'nav-link']) !!}</li>
                </ul>
                @endif
            </ul>
        </div>
    </nav>
</header>





