@extends('layout.base')

@section('page-title')
   
@endsection

@section('page-content')
    <h1>{{$comic['title']}}</h1>
    <img src="{{$comic['thumb']}}" alt="">
    
@endsection