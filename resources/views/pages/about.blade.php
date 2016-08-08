@extends('layout')
@section('content')
                @foreach($p as $person)

                   <h1>{{$person}}</h1>


                @endforeach
@stop