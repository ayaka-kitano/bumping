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
                <li>{{ $profile->age }}</li>
                <li>{{ $profile->sex }}</li>
                <li>{{ $profile->birthday }}</li>
                <li>{{ $profile->family }}</li>
                <li>{{ $profile->hometown }}</li>
                <li>{{ $profile->dislike }}</li>
                <li>{{ $profile->beento }}</li>
                <li>{{ $profile->comment }}</li>
            </ul>
        </div>
    </div>
@endsection