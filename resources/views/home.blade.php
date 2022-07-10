@extends('layouts.base')

@section('title')
    Home Page
@endsection

@section('page-content')
    <section class="contain">
        <ul class="row">
            @foreach ($comics as $comic)
                <li class="col-2">
                    <img src="{{$comic['thumb']}}" alt="thumb">
                    <h4>{{$comic['series']}}</h4>
                </li>
                
            @endforeach
        </ul>
    </section>
    {{-- @dump($comics) --}}
@endsection