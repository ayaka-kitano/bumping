@extends('layouts.app')

@section('content')
    <h1>ランキング</h1>
    
    @foreach ($favorite_users as $favorite_user)
    {{ $favorite_user->name }}
    @endforeach
    
 
    
@endsection