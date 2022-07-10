@extends('layouts.base')

@section('title')
    Home Page
@endsection

@section('page-content')
    <section>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <img src="{{$comic['thumb']}}" alt="thumb">
                    <h4>{{$comic['series']}}</h4>
                </li>
                
            @endforeach
        </ul>
    </section>
    @dump($comics)
@endsection