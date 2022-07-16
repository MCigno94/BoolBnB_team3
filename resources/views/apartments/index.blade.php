@extends('layouts.app')

@section('content')
        @foreach($apartments as $apartment)
                <h2>{{$apartment->title}}</h2>
                <img src="{{$apartment->image}}" alt="un immagine bella bella">
                <p>{{$apartment->description}}</p>
                <div>{{$apartment->daily_price}}</div>
                <a class="btn btn-primary" href="{{route('user.apartments.show',$apartment->id)}}">Views</a>
                    <a class="btn btn-secondary" href="{{route('user.apartments.edit',$apartment->id)}}">Edit</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-post-{{$apartment->id}}">
                        Delete
                    </button>

                <br><br><hr>
                
        @endforeach
@endsection