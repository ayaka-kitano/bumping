@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
           
        </aside>
        <div class="col-xs-8">
            <ul>
                <li>{{ $user->name }}</li>

                
                @if (isset($profile->age))
                <li>{{ $profile->age }}</li>
                @endif
                
                @if (isset($profile->sex))
                <li>{{ $profile->sex }}</li>
                @endif
                
                @if (isset($profile->birthday))
                <li>{{ $profile->birthday }}</li>
                @endif
                
                @if (isset($profile->family))
                <li>{{ $profile->family }}</li>
                @endif
                
                @if (isset($profile->hometown))
                <li>{{ $profile->hometown }}</li>
                @endif
                
                @if (isset($profile->dislike))
                <li>{{ $profile->dislike }}</li>
                @endif
                
                @if (isset($profile->beento))
                <li>{{ $profile->beento }}</li>
                @endif
                
                @if (isset($profile->comment))
                <li>{{ $profile->comment }}</li>
                @endif
            
            </ul>
        </div>
        <div>
           <p>{!! link_to_route('users.edit', '編集ページ', ['id' => $user->id]) !!}</p>
        </div>
        <!--/編集ボタン作った/-->
    </div>
@endsection