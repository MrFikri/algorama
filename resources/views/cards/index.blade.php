

@extends('layout')
@section('content')
        <h1>List of cards</h1>

        @foreach($cards as $card)
            {{$card->id}}
            ..
            {{$card->title}}

            <br>
        @endforeach


@stop