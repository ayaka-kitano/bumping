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
{!! Form::model($profile, ['route' => ['users.update', $profile->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('age', '年齢:') !!}
                    {!! Form::text('age', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('sex', '性別:') !!}
                    {!! Form::text('sex', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('birthday', '誕生日:') !!}
                    {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('family', '家族、兄弟姉妹、ペット:') !!}
                    {!! Form::text('family', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('hometown', '出身:') !!}
                    {!! Form::text('hometown', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('dislike', '拒絶反応:') !!}
                    {!! Form::text('dislike', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('beento', '行ったことのある国:') !!}
                    {!! Form::text('beento', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('comment', '何か一言:') !!}
                    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
            
        </div>
        </div>
        
@endsection