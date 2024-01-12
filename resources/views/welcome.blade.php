@extends('layouts.app')

@section('title','HELLO :) ')



@section('content')
    <h2> this is content section</h2>

    @if(session('session flashed'))
        خوش آمدید {{session('session flasjed')}}
    @endif
@endsection


@section('bredcrump')
    <h5> this is bred crump</h5>
@endsection
