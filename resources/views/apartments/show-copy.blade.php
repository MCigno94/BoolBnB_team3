@extends('layouts.app')

@section('content')
        
                <h2>{{$apartment->title}}</h2>
                <img src="{{$apartment->image}}" alt="un immagine bella bella">
                <p>{{$apartment->description}}</p>
                <div>{{$apartment->daily_price}}</div>
                

@endsection